<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Variables para la  configuracion del caso escrutinio 28/10/2019 Valle Viejo

$provincia = 1;

$seccion = 8;

$tipoComicio = 1;

$comicio = 1;

////

Route::get('/', 'EstadisticasController@index');

Route::get('/ingresar', function () {
    return view('auth.login');
});

Auth::routes();

Route::post('actaescrutinio', 'Actaescrutinio@actaescrutinio')->name('actaescrutinio');

//Routers

Route::middleware(['auth'])->group(function(){

    //Dashboard
    Route::get('/home', 'HomeController@index')->name('home');

    //Roles
    Route::resource('roles', 'RoleController');
 
    //Agrupaciones Politicas
    Route::post('agrupacionespoliticas/store', 'AgrupacionespoliticaController@store')->name('agrupacionespoliticas.store')
        ->middleware('can:agrupacionespoliticas.create');
            
    Route::get('agrupacionespoliticas', 'AgrupacionespoliticaController@index')->name('agrupacionespoliticas.index')
        ->middleware('can:agrupacionespoliticas.index');

    Route::get('agrupacionespoliticas/create', 'AgrupacionespoliticaController@create')->name('agrupacionespoliticas.create')
        ->middleware('can:agrupacionespoliticas.create');
        
    Route::put('agrupacionespoliticas/{agrupacionespolitica}', 'AgrupacionespoliticaController@update')->name('agrupacionespoliticas.update')
        ->middleware('can:agrupacionespoliticas.edit');

    Route::get('agrupacionespoliticas/{agrupacionespolitica}', 'AgrupacionespoliticaController@show')->name('agrupacionespoliticas.show')
        ->middleware('can:agrupacionespoliticas.show');
  
    Route::delete('agrupacionespoliticas/{agrupacionespolitica}', 'AgrupacionespoliticaController@destroy')->name('agrupacionespoliticas.destroy')
        ->middleware('can:agrupacionespoliticas.destroy');

    Route::get('agrupacionespoliticas/{agrupacionespolitica}/edit', 'AgrupacionespoliticaController@edit')->name('agrupacionespoliticas.edit')
        ->middleware('can:agrupacionespoliticas.edit');

    //Lista Politicas
    Route::post('listainternas/store', 'ListainternaController@store')->name('listainternas.store')
        ->middleware('can:listainternas.create');
            
    Route::get('listainternas', 'ListainternaController@index')->name('listainternas.index')
        ->middleware('can:listainternas.index');

    Route::get('listainternas/create', 'ListainternaController@create')->name('listainternas.create')
        ->middleware('can:listainternas.create');
        
    Route::put('listainternas/{listainterna}', 'ListainternaController@update')->name('listainternas.update')
        ->middleware('can:listainternas.edit');

    Route::get('listainternas/{listainterna}', 'ListainternaController@show')->name('listainternas.show')
        ->middleware('can:listainternas.show');
  
    Route::delete('listainternas/{listainterna}', 'ListainternaController@destroy')->name('listainternas.destroy')
        ->middleware('can:listainternas.destroy');

    Route::get('listainternas/{listainterna}/edit', 'ListainternaController@edit')->name('listainternas.edit')
        ->middleware('can:listainternas.edit');


    //Circuitos
    

    Route::post('circuitos/store', 'CircuitoController@store')->name('circuitos.store')
        ->middleware('can:circuitos.create');
            
    Route::get('circuitos', 'CircuitoController@index')->name('circuitos.index')
        ->middleware('can:circuitos.index');

    Route::get('circuitos/create', 'CircuitoController@create')->name('circuitos.create')
        ->middleware('can:circuitos.create');
        
    Route::put('circuitos/{circuito}', 'CircuitoController@update')->name('circuitos.update')
        ->middleware('can:circuitos.edit');

    Route::get('circuitos/{circuito}', 'CircuitoController@show')->name('circuitos.show')
        ->middleware('can:circuitos.show');
  
    Route::delete('circuitos/{circuito}', 'CircuitoController@destroy')->name('circuitos.destroy')
        ->middleware('can:circuitos.destroy');

    Route::get('circuitos/{circuito}/edit', 'CircuitoController@edit')->name('circuitos.edit')
        ->middleware('can:circuitos.edit');

    //Escuelas
    

    Route::post('escuelas/store', 'EscuelaController@store')->name('escuelas.store')
        ->middleware('can:escuelas.create');
            
    Route::get('escuelas', 'EscuelaController@index')->name('escuelas.index')
        ->middleware('can:escuelas.index');

    Route::get('escuelas/create', 'EscuelaController@create')->name('escuelas.create')
        ->middleware('can:escuelas.create');
        
    Route::put('escuelas/{escuela}', 'EscuelaController@update')->name('escuelas.update')
        ->middleware('can:escuelas.edit');

    Route::get('escuelas/{escuela}', 'EscuelaController@show')->name('escuelas.show')
        ->middleware('can:escuelas.show');
  
    Route::delete('escuelas/{escuela}', 'EscuelaController@destroy')->name('escuelas.destroy')
        ->middleware('can:escuelas.destroy');

    Route::get('escuelas/{escuela}/edit', 'EscuelaController@edit')->name('escuelas.edit')
        ->middleware('can:escuelas.edit');

    //Mesas
    

    Route::post('mesas/store', 'MesaController@store')->name('mesas.store')
        ->middleware('can:mesas.create');
            
    Route::get('mesas', 'MesaController@index')->name('mesas.index')
        ->middleware('can:mesas.index');

    Route::get('mesas/create', 'MesaController@create')->name('mesas.create')
        ->middleware('can:mesas.create');
        
    Route::put('mesas/{mesa}', 'MesaController@update')->name('mesas.update')
        ->middleware('can:mesas.edit');

    Route::get('mesas/{mesa}', 'MesaController@show')->name('mesas.show')
        ->middleware('can:mesas.show');
  
    Route::delete('mesas/{mesa}', 'MesaController@destroy')->name('mesas.destroy')
        ->middleware('can:mesas.destroy');

    Route::get('mesas/{mesa}/edit', 'MesaController@edit')->name('mesas.edit')
        ->middleware('can:mesas.edit');

    //Users
            
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');

    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('can:users.create');
        
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');
  
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');

    //Fiscales
    Route::get('escrutinio', 'EscrutinioController@index')->name('escrutinio.index');
            
});

