<?php

namespace App\Http\Controllers;

use App\Listainterna;
use App\Agrupacionespolitica;
use Illuminate\Http\Request;
use App\Http\Requests\ListainternaRequest;

class ListainternaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listainternas = Listainterna::paginate();

        $agrupacionespoliticas = Agrupacionespolitica::get();

        return view('admin.listainternas.index', compact('listainternas','agrupacionespoliticas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $agrupacionespoliticas = Agrupacionespolitica::get();

        return view('admin.listainternas.create', compact('agrupacionespoliticas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListainternaRequest $ListainternaRequest)
    {
        //$listainterna = Listainterna::create($ListainternaRequest->all());
   
        // actualizar
        //$listainterna->agrupacionespoliticas()->sync($ListainternaRequest->get('agrupacionespoliticas'));

        $listainterna = Listainterna::create($ListainternaRequest->all());

        return redirect()->route('listainternas.index')
            ->with('info', 'Lista guardada con exito');

            //

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Listainterna  $listainterna
     * @return \Illuminate\Http\Response
     */
    public function show(Listainterna $listainterna)
    {
        //dd($listainterna->idListainternas); 
        return view('admin.listainternas.show', compact('listainterna'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listainterna  $listainterna
     * @return \Illuminate\Http\Response
     */
    public function edit(Listainterna $listainterna)
    {

        //$agrupacionespoliticas = Agrupacionespolitica::get();

        //$agrupacionespoliticas = Agrupacionespolitica::lists('idAgrupacionesPoliticas', 'nombre')->toArray();

        $agrupacionespoliticas = Agrupacionespolitica::pluck('nombre', 'idAgrupacionesPoliticas')->prepend('Cambiar Partido Politico ', ''); // creating list;

        $data = [
            'title' => 'Lista Interna',
            'listainterna' => $listainterna,
           
        ];

        $title = "Lista Interna";

        

        return view('admin.listainternas.edit', $data, compact('agrupacionespoliticas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listainterna  $listainterna
     * @return \Illuminate\Http\Response
     */
    public function update(ListainternaRequest $ListainternaRequest, Listainterna $listainterna)
    {

        //actualizar

        $listainterna->update($ListainternaRequest->all());

        // actualizar
        //$listainterna->agrupacionespoliticas()->sync($ListainternaRequest->get('agrupacionespoliticas'));

        return redirect()->route('listainternas.index', $listainterna->idListaInterna)
        ->with('info', 'Lista interna actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listainterna  $listainterna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listainterna $listainterna)
    {
        $listainterna->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
