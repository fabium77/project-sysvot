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

Route::get('/ingresar', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('actaescrutinio', 'Actaescrutinio@actaescrutinio')->name('actaescrutinio');


   //Routers

Route::middleware(['auth'])->group(function(){
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

    //Users
            
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');
        
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');
  
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');
            
});

