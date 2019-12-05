<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Escuela;
use App\Circuito;
use App\Comicios_has_mesa;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Http\Requests\MesaRequest;



class MesaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo


    
    public function index()
    {



        $mesas = Mesa::get();

        $escuelas = Escuela::pluck('nombre', 'idescuelas')->prepend('Seleccionar ', ''); // creating list;

        $escuelasNombres = Escuela::get();

        return view('admin.mesas.index', compact('mesas', 'escuelas', 'escuelasNombres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $escuelas = Escuela::get();

        return view('admin.mesas.create', compact('escuelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MesaRequest $MesaRequest)
    {
        //$mesa = Mesa::create($MesaRequest->all());
   
        // actualizar

        $mesa = Mesa::create($MesaRequest->all());

        //$ultimoReg = Mesa::get()->last();

        $ultimo = $mesa->idMesas;

        //$idAreaRecienGuardada = $area->id;

        $comicios_has_mesa = new Comicios_has_mesa;

        $comicios_has_mesa->Comicios_idComicios = 1;

        $comicios_has_mesa->Mesas_idMesas = $ultimo;

        $comicios_has_mesa->CantidadElectores = $MesaRequest->CantidadElectores;

        $comicios_has_mesa->save();


        return redirect()->route('mesas.index')
            ->with('info', 'Guardado con exito Mesa: '.$mesa->numero);

            //

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {

        $escuelas = Escuela::get();
        $numeroMesa = $mesa->numero;
        
        $datos = DB::select("SELECT 
        
        mesas.numero as Numero_Mesa,
        Comicios_has_Mesas.CantidadElectores,
        escrutinios.voto,
        cargoselectivos.nombre,
        listainternas.nombre as ListaInterna,
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
        where mesas.numero = '$numeroMesa' ");

       

       //dd($datos);

       $cantelectores = DB::select("SELECT 
        comicios_has_mesas.CantidadElectores 
        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        where mesas.numero = '$numeroMesa' LIMIT 1");

       $listas = DB::select('SELECT listainternas.numero, listainternas.nombre FROM listainternas;');

      // dd($cantelectores);


        $escuelas = Escuela::where('idEscuelas', $mesa->Escuelas_idEscuelas)->first()->nombre;   

        return view('admin.mesas.show', compact('mesa','escuelas','datos','numeroMesa','cantelectores','listas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa, Comicios_has_mesa $comicios_has_mesa)
    {


        $escuelas = Escuela::pluck('nombre', 'idEscuelas')->prepend('Cambiar', ''); // creating list;

        //$mesa->comicios_has_mesas()->sync($comicios_has_mesa);

        $data = [
            'title' => 'Mesa',
            'mesa' => $mesa,
           
        ];

        $title = "Mesa";

        

        return view('admin.mesas.edit', $data, compact('escuelas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(MesaRequest $MesaRequest, Mesa $mesa, Comicios_has_mesa $comicios_has_mesa)
    {

        //actualizar

        $mesa->update($MesaRequest->all());

        //$comicios_has_mesa = new Comicios_has_mesa;

        //$comicios_has_mesa=Comicios_has_mesa::where('CantidadElectores', '=', $MesaRequest->CantidadElectores);

        $comicios_has_mesa=Comicios_has_mesa::where('Mesas_idMesas', '=', $MesaRequest->idMesasUpdate)->first();

        //$comicios_has_mesa = Comicios_has_mesa::find($MesaRequest->Mesas_idMesas);

        $comicios_has_mesa->CantidadElectores = $MesaRequest->CantidadElectores;

        $comicios_has_mesa->save();




        // actualizar
        //$mesa->escuelas()->sync($MesaRequest->get('escuelas'));

        return redirect()->route('mesas.index', $mesa->idMesas)
        ->with('info', 'Mesa actualizada con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        $mesa->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    public function listarmesas(Mesa $mesa)
    {
        $listarmesas = Mesa::get();

        return $listarmesas;
    }    

    public function getMesa($mesa)
    {
        $mesa = Mesa::where('numero', '=', $mesa)->firstOrFail();

        return $mesa;
    } 

}
