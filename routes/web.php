<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProvidersController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\FacturaController;

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
    Route::get('/clientes/eliminar/{id}', [ClientsController::class, 'getEliminar']);
    Route::post('/api/clientes/eliminar', [ClientsController::class, 'apiEliminar']);

    Route::get('/empleados', [EmployeesController::class, 'index']);
    Route::get('/empleados/crear', [EmployeesController::class, 'getCrear']);
    Route::post('/api/empleados/crear', [EmployeesController::class, 'apiCrear']);
    Route::get('/empleados/modificar/{id}', [EmployeesController::class, 'getModificar']);
    Route::post('/api/empleados/modificar', [EmployeesController::class, 'apiModificar']);
    Route::get('/empleados/eliminar/{id}', [EmployeesController::class, 'getEliminar']);
    Route::post('/api/empleados/eliminar', [EmployeesController::class, 'apiEliminar']);

    Route::get('/proveedores', [ProvidersController::class, 'index']);
    Route::get('/proveedores/crear', [ProvidersController::class, 'getCrear']);
    Route::post('/api/proveedores/crear', [ProvidersController::class, 'apiCrear']);
    Route::get('/proveedores/modificar/{id}', [ProvidersController::class, 'getModificar']);
    Route::post('/api/proveedores/modificar', [ProvidersController::class, 'apiModificar']);
    Route::get('/proveedores/eliminar/{id}', [ProvidersController::class, 'getEliminar']);
    Route::post('/api/proveedores/eliminar', [ProvidersController::class, 'apiEliminar']);


    Route::get('/marcas', [MarcaController::class, 'index']);
    Route::get('/marcas/crear', [MarcaController::class, 'getCrear']);
    Route::post('/api/marcas/crear', [MarcaController::class, 'apiCrear']);
    Route::get('/marcas/modificar/{id}', [MarcaController::class, 'getModificar']);
    Route::post('/api/marcas/modificar', [MarcaController::class, 'apiModificar']);
    Route::get('/marcas/eliminar/{id}', [MarcaController::class, 'getEliminar']);
    Route::post('/api/marcas/eliminar', [MarcaController::class, 'apiEliminar']);


    Route::get('/facturas', [FacturaController::class, "index"]);
    Route::get('/facturas/crear', [FacturaController::class, "getCrear"]);
    Route::post('/api/facturas/crear', [FacturaController::class, "apiCrear"]);
    Route::get('/facturas/gestionar/{id}', [FacturaController::class, "getGestionar"]);
    Route::post('/api/facturas/gestionar', [FacturaController::class, "apiGestionar"]);
    Route::get('/facturas/eliminar/{id}', [FacturaController::class, "getEliminar"]);
    Route::post('/api/facturas/eliminar', [FacturaController::class, "apiEliminar"]);
});




require __DIR__.'/auth.php';
