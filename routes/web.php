<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PANEL
// ────────────────────────────────────────────────────────────────────────────────
Route::group(['middleware' => ['auth']], function() {

    Route::prefix('panel')->group(function () {

        //tabla base
        Route::get('table', 'PrincipalController@tablas');

        //principal
        Route::get('principal', 'PrincipalController@index')->name('principal');

        //notas
        Route::resource('notas', 'NotaController');
        Route::get('archivo', 'NotaController@archivo')->name('archivo');

        //users
        Route::resource('usuarios', 'UserController');

        //roles
        Route::resource('roles','RoleController');

        //productos
        Route::resource('products','ProductController');
    });
});

