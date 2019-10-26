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

        $idComiciosHasMesas = Comicios_has_mesa::where('Comicios_idComicios', $tipocomicio)
                                            ->where('Mesas_idMesas', $mesa)
                                            ->first()->idComiciosHasMesas;

        // Comicio lo que se elige ej: Presidente, Gobernador, , , 


        $CargosElectivos = Cargoselectivo::where('Comicios_idComicios', 1)
               ->orderBy('nombre', 'asc')
               ->take(200)
               ->get(); 
        


        $fila = ['nro' => "nro"];

        $votosNulos = ['Inscriptos' => $inscriVotar];

        $votosRecurridos = ['Inscriptos' => $inscriVotar];

        $votosImpugnados = ['Inscriptos' => $inscriVotar];

        $totalVotosEspeciales = ['Inscriptos' => $inscriVotar];

        $votosBlancos = ['Inscriptos' => $inscriVotar];

        $count=0;

        $countCarg = 0;

        $cargosAElegir[0] = "";

        $votantes = 0;

        //Circuitos
        $circuitos = Circuito::all();
        
        
        foreach ($CargosElectivos as $cargoElectivo)

            {
                
                $cargosAElegir[$countCarg] = $cargoElectivo->nombre;


                $cargoElegir = $cargoElectivo->nombre;

                $votosBlancos = array_add($votosBlancos, $cargoElectivo->nombre, 0);

                $votosNulos = array_add($votosNulos, $cargoElectivo->nombre, 0);

                $votosRecurridos = array_add($votosRecurridos, $cargoElectivo->nombre, 0);

                $votosImpugnados = array_add($votosImpugnados, $cargoElectivo->nombre, 0);

                $totalVotosEspeciales = array_add($totalVotosEspeciales, $cargoElectivo->nombre, 0);

                $Listainterna_has_cargoselectivos = Listainterna_has_cargoselectivo::where('CargosElectivos_idCargosElectivos', $cargoElectivo->idCargosElectivos)
                ->orderBy('ListaInterna_idListaInterna', 'asc')
                ->take(200)
                ->get();

                // Ejemplo de Inner Join

                /*$Listainterna_has_cargoselectivos = Listainterna_has_cargoselectivo::join('listainternas','ListaInterna_idListaInterna', '=', 'listainternas.idListaInterna')
                ->orderBy('numero', 'asc')
                ->take(200)
                ->get();*/


                foreach ($Listainterna_has_cargoselectivos as $listainterna_has_cargoselectivo) 
                    
                    {

                        $Listainternas = Listainterna::where('idListaInterna', $listainterna_has_cargoselectivo->ListaInterna_idListaInterna)->first();

                        switch($Listainternas->letra) {

                            case "VN":
                            
                                $votos = Escrutinio::where('Comicios_has_Mesas', $idComiciosHasMesas)
                                    ->where('ListaInter_has_CargosElectivos', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo)
                                    ->first()->voto;

                                $votosNulos[$cargoElectivo->nombre] = $votos;

                                $totalVotosEspeciales[$cargoElectivo->nombre] = $totalVotosEspeciales[$cargoElectivo->nombre] + $votos;
                                

                            break;
                            case "VR":

                                $votos = Escrutinio::where('Comicios_has_Mesas', $idComiciosHasMesas)
                                    ->where('ListaInter_has_CargosElectivos', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo)
                                    ->first()->voto;

                                $votosRecurridos[$cargoElectivo->nombre] = $votos;

                                $totalVotosEspeciales[$cargoElectivo->nombre] = $totalVotosEspeciales[$cargoElectivo->nombre] + $votos;

                            break;
                            case "VI":

                                $votos = Escrutinio::where('Comicios_has_Mesas', $idComiciosHasMesas)
                                    ->where('ListaInter_has_CargosElectivos', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo)
                                    ->first()->voto;

                                $votosImpugnados[$cargoElectivo->nombre] = $votos;

                                $totalVotosEspeciales[$cargoElectivo->nombre] = $totalVotosEspeciales[$cargoElectivo->nombre] + $votos;
                            
                            break;
                            default:

                                $columna = ['nro' => $Listainternas->numero];

                                $columna = array_add($columna, 'agrupacionpolitica', $Listainternas->nombre);
    
                                $columna = array_add($columna, 'cargo', $cargoElegir);
    
                                $columna = array_add($columna, 'letra', $Listainternas->letra);
    
    
                                $votos = Escrutinio::where('Comicios_has_Mesas', $idComiciosHasMesas)
                                    ->where('ListaInter_has_CargosElectivos', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo)
                                    ->first()->voto;
    
    
                                $columna = array_add($columna, 'votos', $votos);
    
                                $count++;
    
                                $fila = array_add($fila, $count , $columna);
    
                                $votantes += $votos;

                            }

                        
                    
                    }



                    $countCarg++;


        }


        $CargosElectivos2 = Cargoselectivo::where('Comicios_idComicios', 1)
               ->orderBy('nombre', 'asc')
               ->take(200)
               ->get();


               foreach ($CargosElectivos2 as $cargoElectivo2)

                {

                    $votosBlancos[$cargoElectivo2->nombre] = $votantes - $totalVotosEspeciales[$cargoElectivo2->nombre];
                   
                }
        

        

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
            'totalVotosEspeciales' => $totalVotosEspeciales,
            'circuitos' => $circuitos
        ]);

    }


}
