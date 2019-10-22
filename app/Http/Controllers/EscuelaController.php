<?php

namespace App\Http\Controllers;

use App\Escuela;
use App\Circuito;

use Illuminate\Http\Request;
use App\Http\Requests\EscuelaRequest;



class EscuelaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo


    
    public function index()
    {



        $escuelas = Escuela::paginate();

        $circuitos = Circuito::pluck('nombre', 'idcircuitos')->prepend('Seleccionar ', ''); // creating list;

        return view('admin.escuelas.index', compact('escuelas', 'circuitos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $circuitos = Circuito::get();

        return view('admin.escuelas.create', compact('circuitos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscuelaRequest $EscuelaRequest)
    {
        //$escuela = Escuela::create($EscuelaRequest->all());
   
        // actualizar
        //$escuela->circuitos()->sync($EscuelaRequest->get('circuitos'));

        $escuela = Escuela::create($EscuelaRequest->all());

        return redirect()->route('escuelas.index')
            ->with('info', 'Guardado con exito');

            //

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function show(Escuela $escuela)
    {
        //dd($escuela->idEscuelas); 
        $circuitos = Circuito::get();

        //$circuitos = $escuela->circuitos()->get();

        $circuitos = Circuito::where('idCircuitos', $escuela->Circuitos_idCircuitos)->first()->nombre;   

        return view('admin.escuelas.show', compact('escuela','circuitos'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuela $escuela)
    {


        $circuitos = Circuito::pluck('nombre', 'idCircuitos')->prepend('Cambiar', ''); // creating list;

        $data = [
            'title' => 'Lista Interna',
            'escuela' => $escuela,
           
        ];

        $title = "Lista Interna";

        

        return view('admin.escuelas.edit', $data, compact('circuitos'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function update(EscuelaRequest $EscuelaRequest, Escuela $escuela)
    {

        //actualizar

        $escuela->update($EscuelaRequest->all());

        // actualizar
        //$escuela->circuitos()->sync($EscuelaRequest->get('circuitos'));

        return redirect()->route('escuelas.index', $escuela->idListaInterna)
        ->with('info', 'Lista interna actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escuela  $escuela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuela $escuela)
    {
        $escuela->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
