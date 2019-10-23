<?php

namespace App\Http\Controllers;

use App\Escrutinio;
use Illuminate\Http\Request;

class EscrutinioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('escrutinio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function show(Escrutinio $escrutinio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function edit(Escrutinio $escrutinio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escrutinio $escrutinio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escrutinio  $escrutinio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escrutinio $escrutinio)
    {
        //
    }
}
