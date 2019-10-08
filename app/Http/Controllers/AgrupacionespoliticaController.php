<?php

namespace App\Http\Controllers;

use App\Agrupacionespolitica;
use Illuminate\Http\Request;

class AgrupacionespoliticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrupacionespoliticas = Agrupacionespolitica::paginate();

        return view('agrupacionespoliticas.index', compact('agrupacionespoliticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agrupacionespoliticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrupacionespolitica = Agrupacionespolitica::create($request->all());
        return redirect()->route('agrupacionespoliticas.edit', $agrupacionespolitica->idAgrupacionesPoliticas)
            ->with('info', 'Producto guardado con exito');
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
        return view('agrupacionespoliticas.show', compact('agrupacionespolitica'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function edit(Agrupacionespolitica $agrupacionespolitica)
    {
        return view('agrupacionespoliticas.edit', compact('agrupacionespolitica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agrupacionespolitica  $agrupacionespolitica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agrupacionespolitica $agrupacionespolitica)
    {
        $agrupacionespolitica->update($request->all());

        return redirect()->route('agrupacionespoliticas.edit', $agrupacionespolitica->idAgrupacionesPoliticas)
        ->with('info', 'Producto actualizado con exito');
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
