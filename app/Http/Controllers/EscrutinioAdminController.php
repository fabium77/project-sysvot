<?php

namespace App\Http\Controllers;

use App\Escrutinio;
use App\Listainterna;
use App\Cargoselectivo;
use App\Mesa;
use App\Comicio;
use App\Agrupacionespolitica;



use Illuminate\Http\Request;
use App\Http\Requests\EscrutinioAdminRequest;



class EscrutinioAdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     // Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo


    
    public function index()
    {



        $escrutinioAdmins = Escrutinio::get();

        $listainternas = Listainterna::pluck('nombre', 'idListaInterna')->prepend('Seleccionar ', '');

        $cargoselectivos = Cargoselectivo::pluck('nombre', 'idCargosElectivos')->prepend('Seleccionar ', '');

        $listainternasNombres = Listainterna::get();

        $i = 1;

        foreach ($listainternasNombres as $listainternasNombre)

            {

                if ($listainternas[$i] == "Votos Nulos" or $listainternas[$i] == "Votos Recurridos" or $listainternas[$i] == "Votos Impugnados")

                    {
                        unset($listainternas[$i]);

                    }else

                    {

                        $listainternas[$i] = $listainternasNombre->numero." ".$listainternas[$i]." ".$listainternasNombre->letra;             

                    }
                    $i++;  

            }

        $cargoselectivosNombres = Cargoselectivo::get();
        

        return view('admin.escrutinioAdmins.index', compact('escrutinioAdmins', 'listainternas', 'listainternasNombres', 'cargoselectivos', 'cargoselectivosNombres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $listainternas = Listainterna::get();

        return view('admin.escrutinioAdmins.create', compact('listainternas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscrutinioAdminRequest $EscrutinioAdminRequest)
    {

        $escrutinioAdmin = Escrutinio::create($EscrutinioAdminRequest->all());

        return redirect()->route('escrutinioAdmins.index')
            ->with('info', 'Guardado con exito');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\EscrutinioAdmin  $escrutinioAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(EscrutinioAdmin $escrutinioAdmin)
    {
        //dd($escrutinioAdmin->idEscrutinioAdmins); 
        $listainternas = Listainterna::get();

        //$listainternas = $escrutinioAdmin->listainternas()->get();

        $listainternas = Listainterna::where('idListainternas', $escrutinioAdmin->Listainternas_idListainternas)->first()->nombre;   

        return view('admin.escrutinioAdmins.show', compact('escrutinioAdmin','listainternas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EscrutinioAdmin  $escrutinioAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(EscrutinioAdmin $escrutinioAdmin)
    {


        $listainternas = Listainterna::pluck('nombre', 'idListaInterna')->prepend('Seleccionar ', ''); // creating list;

        $cargoselectivos = Cargoselectivo::pluck('nombre', 'idCargosElectivos')->prepend('Seleccionar ', ''); // creating list;

        $listainternasNombres = Listainterna::get();

        $i = 1;

        foreach ($listainternasNombres as $listainternasNombre)

            {

                if ($listainternas[$i] == "Votos Nulos" or $listainternas[$i] == "Votos Recurridos" or $listainternas[$i] == "Votos Impugnados")

                    {
                        unset($listainternas[$i]);

                    }else

                    {

                        $listainternas[$i] = $listainternasNombre->numero." ".$listainternas[$i]." ".$listainternasNombre->letra;             

                    }
                    $i++;  

            }

        $data = [
            'title' => 'Candidato',
            'escrutinioAdmin' => $escrutinioAdmin,
            'listainternas' => $listainternas,
            'cargoselectivos' => $cargoselectivos,
           
        ];

        $title = "Candidatos";

        
        return view('admin.escrutinioAdmins.edit', $data, compact('listainternas, cargoselectivos'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EscrutinioAdmin  $escrutinioAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(EscrutinioAdminRequest $EscrutinioAdminRequest, EscrutinioAdmin $escrutinioAdmin)
    {

        //actualizar

        $escrutinioAdmin->update($EscrutinioAdminRequest->all());

        // actualizar
        //$escrutinioAdmin->listainternas()->sync($EscrutinioAdminRequest->get('listainternas'));

        return redirect()->route('escrutinioAdmins.index', $escrutinioAdmin->idListaInterna)
        ->with('info', 'Candidato actualizado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EscrutinioAdmin  $escrutinioAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(EscrutinioAdmin $escrutinioAdmin)
    {
        $escrutinioAdmin->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}