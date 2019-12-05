<?php

namespace App\Http\Controllers;

use App\Escrutinio;
use App\Mesa;
use App\Listainterna;
use App\Comicios_has_mesa;
use App\Listainterna_has_cargoselectivo;

use Illuminate\Http\Request;

class EscrutinioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listas = Listainterna_has_cargoselectivo::all();
        return view('escrutinio.index', compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        //Busco mesa
        $mesa = Mesa::where('numero', '=', $input['mesa'])->firstOrFail();
        
        if ($mesa->cargado == 0) {
            $comicio_mesa = Comicios_has_mesa::where('Mesas_idMesas', '=', $mesa->idMesas)->firstOrFail();
            $listas = Listainterna_has_cargoselectivo::all();
                
            foreach($listas as $lista) {
                $voto = 0;
                if($lista->idListInternaHasCargElectivo <= 6 || $lista->idListInternaHasCargElectivo >= 26) {
                    $voto = $input[$lista->idListInternaHasCargElectivo];
                }
                $registro = [
                    'Comicios_has_Mesas' => $comicio_mesa->idComiciosHasMesas,
                    'ListaInter_has_CargosElectivos' => $lista->idListInternaHasCargElectivo,
                    'voto' => $voto,
                    'timestamp' => \Carbon\Carbon::now()->toDateTimeString(),
                    'usuario' => auth()->id()
                ];
                Escrutinio::create($registro);
            }
    
            Mesa::where('idMesas', '=', $mesa->idMesas)->update(['cargado' => 1]);
    
            Comicios_has_mesa::where('Mesas_idMesas', '=', $mesa->idMesas)->update(['votantes' => $input['votos']]);
                   
            return redirect()->route('escrutinio.success');
            
        } else {
            return redirect()->route('escrutinio.index')->with('info', 'La mesa ya fue cargada!');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function show(Escrutinio $escrutinio)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function edit(Escrutinio $escrutinio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escrutinio $escrutinio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escrutinio $escrutinio)
    {
        //
    }

    public function success()
    {
        return view('escrutinio.success');
    }
}
