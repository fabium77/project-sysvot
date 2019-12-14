<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $title = 'Dashboard';

        $estadisticas = DB::select("SELECT 
        
		listainternas.nombre as Lista,
       cargoselectivos.nombre as Cargo,
       sum(escrutinios.voto) as Votos

        FROM escrutinios
        inner join comicios_has_mesas on escrutinios.Comicios_has_Mesas = comicios_has_mesas.idComiciosHasMesas
        inner join mesas on comicios_has_mesas.Mesas_idMesas = mesas.idMesas
        inner join listainterna_has_cargoselectivos on escrutinios.ListaInter_has_CargosElectivos = listainterna_has_cargoselectivos.idListInternaHasCargElectivo
        inner join listainternas on listainterna_has_cargoselectivos.ListaInterna_idListaInterna = listainternas.idListaInterna
        inner join agrupacionespoliticas on listainternas.AgrupacionesPoliticas_idAgrupacionesPoliticas = agrupacionespoliticas.idAgrupacionesPoliticas
        inner join cargoselectivos on listainterna_has_cargoselectivos.CargosElectivos_idCargosElectivos = cargoselectivos.idCargosElectivos
			 where  cargoselectivos.nombre = 'Gobernador' group by listainternas.nombre, cargoselectivos.nombre order by listainternas.nombre");
        
        //dd($estadisticas);
       // return view('admin.index', ['title' => $title ]);
        return view('admin.index', compact('title','estadisticas'));

        
    }
}
