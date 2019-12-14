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

use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function index()
    {
        $title = 'Escrutinio Provisorio';
        
        $votosgob = DB::select("SELECT 
        
		listainternas.nombre as Lista,
       sum(escrutinios.voto) as Votos

        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        inner join escuelas on mesas.Escuelas_idEscuelas = escuelas.idEscuelas
        inner join listainterna_has_cargoselectivos on escrutinios.ListaInter_has_CargosElectivos = listainterna_has_cargoselectivos.idListInternaHasCargElectivo
        inner join listainternas on listainterna_has_cargoselectivos.ListaInterna_idListaInterna = listainternas.idListaInterna
        inner join agrupacionespoliticas on listainternas.AgrupacionesPoliticas_idAgrupacionesPoliticas = agrupacionespoliticas.idAgrupacionesPoliticas
        inner join cargoselectivos on listainterna_has_cargoselectivos.CargosElectivos_idCargosElectivos = cargoselectivos.idCargosElectivos
             where  cargoselectivos.nombre = 'Gobernador' group by listainternas.nombre, cargoselectivos.nombre order by listainternas.nombre");
             
             
       
        return view('index', compact('title','votosgob'));
    }

    public function estadisticas(Request $request)
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
