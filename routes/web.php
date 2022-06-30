<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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


Route::post('/registrar/cliente/omar', [ClientesController::class, 'store'])->name('registrar.cliente');


// Rutas de Javier




// Rutas de Jaime




// Rutas de Jeronimo
