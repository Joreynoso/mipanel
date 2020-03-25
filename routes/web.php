<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PANEL
// ────────────────────────────────────────────────────────────────────────────────
Route::prefix('panel')->group(function () {

    //tabla base
    Route::get('table', 'PrincipalController@tablas');

    //principal
    Route::get('principal', 'PrincipalController@index');

    //notas
    Route::resource('notas', 'NotaController');

    Route::get('archivo', 'NotaController@archivo')->name('archivo');

    //users
    Route::resource('usuarios', 'UserController');
});