<?php

namespace App\Http\Controllers;

use App\Circuito;
use App\Seccione;

use Illuminate\Http\Request;
use App\Http\Requests\CircuitoRequest;



class CircuitoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo


    
    public function index()
    {


        $seccioneEstatica = 8;

        $circuitos = Circuito::paginate();

        //$secciones = Seccione::where('idSecciones', $seccioneEstatica)->first();

        $secciones = Seccione::get();

        return view('admin.circuitos.index', compact('circuitos','secciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $secciones = Seccione::get();

        return view('admin.circuitos.create', compact('secciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CircuitoRequest $CircuitoRequest)
    {
        //$circuito = Circuito::create($CircuitoRequest->all());
   
        // actualizar
        //$circuito->secciones()->sync($CircuitoRequest->get('secciones'));

        $circuito = Circuito::create($CircuitoRequest->all());

        return redirect()->route('circuitos.index')
            ->with('info', 'Lista guardada con exito');

            //

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Circuito  $circuito
     * @return \Illuminate\Http\Response
     */
    public function show(Circuito $circuito)
    {
        //dd($circuito->idCircuitos); 
        return view('admin.circuitos.show', compact('circuito'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Circuito  $circuito
     * @return \Illuminate\Http\Response
     */
    public function edit(Circuito $circuito)
    {

        //$secciones = Seccione::get();

        //$secciones = Seccione::lists('idAgrupacionesPoliticas', 'nombre')->toArray();

        $secciones = Seccione::pluck('nombre', 'idAgrupacionesPoliticas')->prepend('Cambiar Partido Politico ', ''); // creating list;

        $data = [
            'title' => 'Lista Interna',
            'circuito' => $circuito,
           
        ];

        $title = "Lista Interna";

        

        return view('admin.circuitos.edit', $data, compact('secciones'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Circuito  $circuito
     * @return \Illuminate\Http\Response
     */
    public function update(CircuitoRequest $CircuitoRequest, Circuito $circuito)
    {

        //actualizar

        $circuito->update($CircuitoRequest->all());

        // actualizar
        //$circuito->secciones()->sync($CircuitoRequest->get('secciones'));

        return redirect()->route('circuitos.index', $circuito->idListaInterna)
        ->with('info', 'Lista interna actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Circuito  $circuito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Circuito $circuito)
    {
        $circuito->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
