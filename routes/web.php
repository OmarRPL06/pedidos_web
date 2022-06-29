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


// Rutas de Omar
Route::get('/index/cliente/omar', function () {
    return view('clientes.index');
});


// Rutas de Javier




// Rutas de Jaime




// Rutas de Jeronimo
