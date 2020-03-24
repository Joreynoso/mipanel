<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// PANEL
// ────────────────────────────────────────────────────────────────────────────────
Route::prefix('panel')->group(function () {

    Route::resource('notas', 'NotaController');

    Route::get('table', 'PrincipalController@tablas');

    Route::get('principal', 'PrincipalController@index');
    
    Route::get('archivo', 'NotaController@archivo')->name('archivo');
});