<?php

namespace App\Http\Controllers;
use App\EscrutinioAdmin;

use App\Escrutinio;
use App\Listainterna;
use App\Cargoselectivo;
use App\Mesa;
use App\Escuela;
use App\Comicio;
use App\Agrupacionespolitica;
use App\Circuito;
use App\Comicios_has_mesa;
use App\User;
use Illuminate\Support\Facades\DB;


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


        $escuelasNombres = Escuela::get();

        //$mesas = Mesa::get();
        $mesas = DB::select("SELECT 
        mesas.numero as Numero_Mesa,
        mesas.idMesas as id,
        users.name
        
        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        inner join users on users.id = escrutinios.usuario
            where mesas.cargado = 1 group by mesas.numero, users.name, mesas.idMesas");
        


       
        

        return view('admin.escrutinioAdmins.index', compact('escrutinioAdmins','mesas','escuelasNombres', 'listainternas', 'listainternasNombres', 'cargoselectivos', 'cargoselectivosNombres'));

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
        // //dd($escrutinioAdmin->idEscrutinioAdmins); 
        // $listainternas = Listainterna::get();
        $mesa = Mesa::get();
        // //$listainternas = $escrutinioAdmin->listainternas()->get();

        // $listainternas = Listainterna::where('idListainternas', $escrutinioAdmin->Listainternas_idListainternas)->first()->nombre;   


        $escuelas = Escuela::get();
        

        // $escuelas = Escuela::where('idEscuelas', $mesas->Escuelas_idEscuelas);   

        // return view('admin.mesas.show', compact('mesa','escuelas'));

        return view('admin.escrutinioAdmins.show', compact('escrutinioAdmin','mesa','escuelas','escrutinioAdmin'));
        
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
