<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProductsController;
use App\Models\Producto;

use App\Http\Controllers\ClientsController;
use App\Models\Cliente;

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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/productos', [ProductsController::class, 'index']);
    Route::get('/productos/crear', [ProductsController::class, 'getCrear']);
    Route::post('/api/productos/crear',  [ProductsController::class, 'apiCrear']);
    Route::get('/productos/modificar/{id}', [ProductsController::class, 'getModificar']);
    Route::post('/api/productos/modificar', [ProductsController::class, 'apiModificar']);
    Route::get('/productos/eliminar/{id}', [ProductsController::class, 'getEliminar']);
    Route::post('/api/productos/eliminar', [ProductsController::class, 'apiEliminar']);


    Route::get('/clientes', [ClientsController::class, 'index']);
    Route::get('/clientes/crear', [ClientsController::class, 'getCrear']);
    Route::post('/api/clientes/crear', [ClientsController::class, 'apiCrear']);
    Route::get('/clientes/modificar/{id}', [ClientsController::class, 'getModificar']);
    Route::post('/api/clientes/modificar', [ClientsController::class, 'apiModificar']);


});




require __DIR__.'/auth.php';
