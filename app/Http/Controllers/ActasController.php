<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mesa;

class ActasController extends Controller
{
    public function index()
    {
        $mesas = Mesa::get()->where('cargado', '=', 1);
        
        $data = [
            'mesas' => $mesas
        ];
        return view('admin.actas.index', $data);
    }
}
