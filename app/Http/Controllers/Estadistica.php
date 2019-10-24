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

use App\Cargoselectivo;

use App\Listainterna_has_cargoselectivo;

use App\Listainterna;

class Estadistica extends Controller
{
    function Estadisticas(Request $request)

    {

        return \Response::json([
            'nombreTipoComicio' => $nombreTipoComicio,
            'nombreDistricto' => $nombreDistricto,
            'NombreEscuela' => $NombreEscuela,
            'nombreCircuito' => $nombreCircuito,
            'nombreSeccion' => $nombreSeccion,
            'inscriVotar' => $inscriVotar,
            'cargosAElegir' => $cargosAElegir,
            'votosPartidos' => $fila,
            'votantes' => $votantes,
            'votosNulos' => $votosNulos,
            'votosRecurridos' => $votosRecurridos,
            'votosImpugnados' => $votosImpugnados,
            'votosBlancos' => $votosBlancos,
            'totalVotosEspeciales' => $totalVotosEspeciales
        ]);

    }

}
