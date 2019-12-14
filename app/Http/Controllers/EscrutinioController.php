<?php

//ACA

namespace App\Http\Controllers;

use App\Escrutinio;
use App\Mesa;
use App\Escuela;
use App\Circuito;
use App\Listainterna;
use App\Comicios_has_mesa;
use App\Listainterna_has_cargoselectivo;
use Illuminate\Support\Facades\DB;
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

        // dd(auth()->user()->id);
       
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
                    'usuario' => auth()->user()->id
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
    public function edit(Request $request, Escrutinio $escrutinio)
    {   
        $numeroMesa = $request->route('NumMesa');
   
        $cantelectores = DB::select("SELECT 
        Comicios_has_Mesas.CantidadElectores
        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        where mesas.idMesas = '$numeroMesa' limit 1");
        
        $datito = DB::table('escrutinios')
                    ->join('comicios_has_mesas', 'escrutinios.Comicios_has_Mesas', '=', 'comicios_has_mesas.idComiciosHasMesas')
                    ->join('mesas', 'comicios_has_mesas.Mesas_idMesas', '=', 'mesas.idMesas')
                    ->join('listainterna_has_cargoselectivos', 'escrutinios.ListaInter_has_CargosElectivos', '=', 'listainterna_has_cargoselectivos.idListInternaHasCargElectivo')
                    ->join('listainternas', 'listainterna_has_cargoselectivos.ListaInterna_idListaInterna', '=', 'listainternas.idListaInterna')
                    ->select('escrutinios.idEscrutinios','mesas.numero as NumeroMesa','Comicios_has_Mesas.CantidadElectores as CantElectores','listainternas.nombre as ListaInterna','escrutinios.voto as Voto','listainterna_has_cargoselectivos.idListInternaHasCargElectivo as listainterhascarg')
                    ->where('mesas.idMesas','=', $numeroMesa)
                    ->get();
        //dd($datito);




        $datos = DB::select("SELECT 
        
        mesas.numero as Numero_Mesa,
        Comicios_has_Mesas.CantidadElectores,
        escrutinios.voto,
        cargoselectivos.nombre,
        listainternas.nombre as ListaInterna,
        listainterna_has_cargoselectivos.idListInternaHasCargElectivo as listainterhascarg, 
        listainternas.numero as Numero,
        listainternas.letra as Letra,
        agrupacionespoliticas.nombre as Agrupacion_Politica,
        agrupacionespoliticas.numero as Num_Agrupacion
        
        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        inner join listainterna_has_cargoselectivos on escrutinios.ListaInter_has_CargosElectivos = listainterna_has_cargoselectivos.idListInternaHasCargElectivo
        inner join listainternas on listainterna_has_cargoselectivos.ListaInterna_idListaInterna = listainternas.idListaInterna
        inner join agrupacionespoliticas on listainternas.AgrupacionesPoliticas_idAgrupacionesPoliticas = agrupacionespoliticas.idAgrupacionesPoliticas
        inner join cargoselectivos on listainterna_has_cargoselectivos.CargosElectivos_idCargosElectivos = cargoselectivos.idCargosElectivos
        where mesas.idMesas = '$numeroMesa' ");

        $cargos = DB::select("SELECT * FROM cargoselectivos
        where nombre != 'Presidente'");
       //dd($datos);

    //    return view('escrutinio.edit');
       return view('escrutinio.edit', compact('datos','cargos','numeroMesa','cantelectores'));
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
        

        // $input = $request->all();
        
        // //Busco mesa
        // $mesa = Mesa::where('numero', '=', $input['mesa'])->firstOrFail();
        
       
        //     $comicio_mesa = Comicios_has_mesa::where('Mesas_idMesas', '=', $mesa->idMesas)->firstOrFail();
        //     $listas = Listainterna_has_cargoselectivo::all();
                
        //     foreach($listas as $lista) {
        //         $voto = 0;
        //         if($lista->idListInternaHasCargElectivo <= 6 || $lista->idListInternaHasCargElectivo >= 26) {
        //             $voto = $input[$lista->idListInternaHasCargElectivo];
        //         }
        //         $registro = [
        //             'Comicios_has_Mesas' => $comicio_mesa->idComiciosHasMesas,
        //             'ListaInter_has_CargosElectivos' => $lista->idListInternaHasCargElectivo,
        //             'voto' => $voto,
        //             'timestamp' => \Carbon\Carbon::now()->toDateTimeString(),
        //             'usuario' => auth()->user()->id
        //         ];

        //         Escrutinio::save($registro);
        //     }
    
        //     Comicios_has_mesa::where('Mesas_idMesas', '=', $mesa->idMesas)->update(['votantes' => $input['votos']]);
                   
            // return redirect()->route('escrutinio.success');
            return 'hola';
            
        
    }

    public function actualizardatos(Request $request){
        $input = $request->all();
        dd($input);
        //Busco mesa
        $mesa = Mesa::where('numero', '=', $input['mesa'])->firstOrFail();
        
       
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
                    'usuario' => auth()->user()->id
                ];

                Escrutinio::save($registro);
            }
    
            Comicios_has_mesa::where('Mesas_idMesas', '=', $mesa->idMesas)->update(['votantes' => $input['votos']]);
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
