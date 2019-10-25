<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Escuela;
use App\Circuito;
use App\Comicios_has_mesa;


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
        //dd($mesa->idMesas); 
        $escuelas = Escuela::get();

        //$escuelas = $mesa->escuelas()->get();

        $escuelas = Escuela::where('idEscuelas', $mesa->Escuelas_idEscuelas)->first()->nombre;   

        return view('admin.mesas.show', compact('mesa','escuelas'));
        
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



}
