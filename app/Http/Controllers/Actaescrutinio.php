<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Escrutinio;

use App\Escuela;

use App\Mesa;

use App\Comicio;

use App\Tipocomicio;

use App\Provincia;

use App\Circuito;

use App\Seccione;

use App\Comicios_has_mesa;

class Actaescrutinio extends Controller
{
    function actaescrutinio(Request $request)

    {

        // Obteniendo datos del input

        $districto = $request->input('districto');

        $eleccion = $request->input('eleccion');

        $mesa = $request->input('mesa');

        $tipocomicio = $request->input('tipocomicio'); // Ej. Las Paso

        $fechacomicio = $request->input('fechacomicio');

        

        // Nombre Tipo de comicio Ej. Las Paso

        $nombreTipoComicio = Comicio::where('idComicios', $tipocomicio)->first()->nombre;

        // Nombre del Districto

        $nombreDistricto = Provincia::where('idProvincias', $districto)->first()->nombre;

        // Nombre de la Escuela

        $Escuelas_idEscuelas = Mesa::where('Escuelas_idEscuelas', $mesa)->first()->Escuelas_idEscuelas;      

        $NombreEscuela = Escuela::where('idEscuelas', $Escuelas_idEscuelas)->first()->nombre;

        // Nombre Circuito

        $Circuitos_idCircuitos = Escuela::where('idEscuelas', $Escuelas_idEscuelas)->first()->Circuitos_idCircuitos;

        $nombreCircuito = Circuito::where('idCircuitos', $Circuitos_idCircuitos)->first()->nombre;            

        // Nombre Seccion

        $Secciones_idSecciones = Circuito::where('idCircuitos', $Circuitos_idCircuitos)->first()->Secciones_idSecciones;

        $nombreSeccion = Seccione::where('idSecciones', $Secciones_idSecciones)->first()->nombre;
        
        // Inscriptos para votar
       
        $inscriVotar = Comicios_has_mesa::where('Comicios_idComicios', $tipocomicio)
                                            ->where('Mesas_idMesas', $mesa)
                                            ->first()->CantidadElectores;


        return \Response::json([
            'inscriVotar' => $inscriVotar,
            'nombreSeccion' => $nombreSeccion,
        ]);

    }


}
