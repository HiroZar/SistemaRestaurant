<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ReservacionController;

use App\Http\Controllers\DetalleOrdenCompraController;
use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\RecepcionController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('mesas', MesaController::class);
    Route::resource('reservacions', ReservacionController::class);
    Route::resource('orden-compras', OrdenCompraController::class);
    Route::resource('detalle-orden-compras', DetalleOrdenCompraController::class);
    Route::resource('administradors', AdministradorController::class);
    Route::resource('recepcions', RecepcionController::class);
    Route::resource('compras', CompraController::class);
    Route::get('/detalle-orden-compras/create2/{idOrden}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'create2'])->name('detalle-orden-compras.create2');
    //Route::get('/detalle-orden-compras/update/', DetalleOrdenCompraController::class,'update')->name('detalle-orden-compras.update');
    Route::get('/detalle-orden-compras/create', [App\Http\Controllers\DetalleOrdenCompraController::class, 'create'])->name('detalle-orden-compras.create');
    Route::get('/detalle-orden-compras/edit/{idOrden},/{idProducto}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'edit'])->name('detalle-orden-compras.edit');
    Route::delete('/detalle-orden-compras/destroy/{idOrden},/{idProducto}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'destroy'])->name('detalle-orden-compras.destroy');
    Route::get('/orden-compra/index2', [App\Http\Controllers\OrdenCompraController::class, 'index2'])->name('orden-compras.index2');

});
