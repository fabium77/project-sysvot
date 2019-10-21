<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        $title = 'Escrutinio Provisorio';
        
        return view('index', [
            'title' => $title
        ]);
    }
}
