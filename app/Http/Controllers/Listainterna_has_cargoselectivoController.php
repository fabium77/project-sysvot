<?php

namespace App\Http\Controllers;

use App\Listainterna_has_cargoselectivo;
use App\Listainterna;
use App\Cargoselectivo;


use Illuminate\Http\Request;
use App\Http\Requests\Listainterna_has_cargoselectivoRequest;



class Listainterna_has_cargoselectivoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo


    
    public function index()
    {



        $listainterna_has_cargoselectivos = Listainterna_has_cargoselectivo::paginate();

        $listainternas = Listainterna::pluck('nombre', 'idListaInterna')->prepend('Seleccionar ', ''); // creating list;

        $cargoselectivos = Cargoselectivo::pluck('nombre', 'idCargosElectivos')->prepend('Seleccionar ', ''); // creating list;

        $listainternasNombres = Listainterna::get();

        $cargoselectivosNombres = Cargoselectivo::get();

        return view('admin.listainterna_has_cargoselectivos.index', compact('listainterna_has_cargoselectivos', 'listainternas', 'listainternasNombres', 'cargoselectivos', 'cargoselectivosNombres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $listainternas = Listainterna::get();

        return view('admin.listainterna_has_cargoselectivos.create', compact('listainternas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Listainterna_has_cargoselectivoRequest $Listainterna_has_cargoselectivoRequest)
    {

        $listainterna_has_cargoselectivo = Listainterna_has_cargoselectivo::create($Listainterna_has_cargoselectivoRequest->all());

        return redirect()->route('listainterna_has_cargoselectivos.index')
            ->with('info', 'Guardado con exito');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Listainterna_has_cargoselectivo  $listainterna_has_cargoselectivo
     * @return \Illuminate\Http\Response
     */
    public function show(Listainterna_has_cargoselectivo $listainterna_has_cargoselectivo)
    {
        //dd($listainterna_has_cargoselectivo->idListainterna_has_cargoselectivos); 
        $listainternas = Listainterna::get();

        //$listainternas = $listainterna_has_cargoselectivo->listainternas()->get();

        $listainternas = Listainterna::where('idListainternas', $listainterna_has_cargoselectivo->Listainternas_idListainternas)->first()->nombre;   

        return view('admin.listainterna_has_cargoselectivos.show', compact('listainterna_has_cargoselectivo','listainternas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listainterna_has_cargoselectivo  $listainterna_has_cargoselectivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Listainterna_has_cargoselectivo $listainterna_has_cargoselectivo)
    {


        $listainternas = Listainterna::pluck('nombre', 'idListainternas')->prepend('Cambiar', ''); // creating list;

        $data = [
            'title' => 'Lista Interna',
            'listainterna_has_cargoselectivo' => $listainterna_has_cargoselectivo,
           
        ];

        $title = "Lista Interna";

        

        return view('admin.listainterna_has_cargoselectivos.edit', $data, compact('listainternas'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listainterna_has_cargoselectivo  $listainterna_has_cargoselectivo
     * @return \Illuminate\Http\Response
     */
    public function update(Listainterna_has_cargoselectivoRequest $Listainterna_has_cargoselectivoRequest, Listainterna_has_cargoselectivo $listainterna_has_cargoselectivo)
    {

        //actualizar

        $listainterna_has_cargoselectivo->update($Listainterna_has_cargoselectivoRequest->all());

        // actualizar
        //$listainterna_has_cargoselectivo->listainternas()->sync($Listainterna_has_cargoselectivoRequest->get('listainternas'));

        return redirect()->route('listainterna_has_cargoselectivos.index', $listainterna_has_cargoselectivo->idListaInterna)
        ->with('info', 'Lista interna actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listainterna_has_cargoselectivo  $listainterna_has_cargoselectivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listainterna_has_cargoselectivo $listainterna_has_cargoselectivo)
    {
        $listainterna_has_cargoselectivo->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
