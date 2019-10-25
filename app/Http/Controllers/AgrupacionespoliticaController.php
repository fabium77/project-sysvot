<?php

namespace App\Http\Controllers;

use App\Agrupacionespolitica;
use Illuminate\Http\Request;
use App\Http\Requests\AgrupacionespoliticaRequest;

class AgrupacionespoliticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrupacionespoliticas = Agrupacionespolitica::get();

        return view('admin.agrupacionespoliticas.index', compact('agrupacionespoliticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agrupacionespoliticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgrupacionespoliticaRequest $AgrupacionespoliticaRequest)
    {
        $agrupacionespolitica = Agrupacionespolitica::create($AgrupacionespoliticaRequest->all());

        return redirect()->route('agrupacionespoliticas.index')
            ->with('info', 'Agrupacion Politica guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function show(Agrupacionespolitica $agrupacionespolitica)
    {
        //dd($agrupacionespolitica->idAgrupacionesPoliticas); 
        $data = [
            'title' => 'Agrupación Política',
            'agrupacionespolitica' => $agrupacionespolitica
        ];

        return view('admin.agrupacionespoliticas.show', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function edit(Agrupacionespolitica $agrupacionespolitica)
    {
        $data = [
            'title' => 'Agrupación Política',
            'agrupacionespolitica' => $agrupacionespolitica
        ];

        return view('admin.agrupacionespoliticas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function update(AgrupacionespoliticaRequest $AgrupacionespoliticaRequest, Agrupacionespolitica $agrupacionespolitica)
    {
        $agrupacionespolitica->update($AgrupacionespoliticaRequest->all());

        return redirect()->route('agrupacionespoliticas.index', $agrupacionespolitica->idAgrupacionesPoliticas)
        ->with('info', 'Agrupacion Politica actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agrupacionespolitica $agrupacionespolitica)
    {
        $agrupacionespolitica->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
