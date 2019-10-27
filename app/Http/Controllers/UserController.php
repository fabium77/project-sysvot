<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use App\Mesa;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        $roles = Role::all();

        $mesas = Mesa::pluck('numero', 'idMesas')->prepend('Seleccionar ', ''); // creating list;

        return view('admin.users.index', compact('users', 'roles', 'mesas'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $roles = $user->roles()->get();

        return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();

        $mesas = Mesa::pluck('numero', 'idMesas')->prepend('Seleccionar ', ''); // creating list;

        return view('admin.users.edit', compact('user', 'roles', 'mesas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Mesa $mesa)
    {

        // actualizar usuario    

        $user->update($request->all());

        // actualizar roles

        $user->roles()->sync($request->get('roles'));

        //$idMesa=Mesa::where('numero', '=', $request->numero)->first();

        //$mesa->fiscalmesa = $request->id;

        //Mesa::find($idMesa)->update(['fiscalmesa' => $request->id]);

        Mesa::where('numero', '=', $request->numero)->update(array('fiscalmesa' => $user->id));

        $user->update($request->all());

        //$comicios_has_mesa = Comicios_has_mesa::find($MesaRequest->Mesas_idMesas);

        return redirect()->route('users.index', $user->id)
            ->with('info', 'Usuario actualizado con exito Mesa: '.$user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        User::create($input);

        return redirect()->route('users.index')
            ->with('info', 'Usuario guardado con exito');
    }
}
