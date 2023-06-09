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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/indicadores', [App\Http\Controllers\IndicadorController::class, 'index'])->name('indicadores');


//Routing Inventario
Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventario');
Route::get('/inventario/create', [App\Http\Controllers\InventarioController::class, 'create'])->name('create');
Route::post('/inventario/store', [App\Http\Controllers\InventarioController::class, 'store'])->name('store');
Route::get('/inventario/{id}', [App\Http\Controllers\InventarioController::class, 'edit'])->name('edit');
Route::put('/inventario/{id}', [App\Http\Controllers\InventarioController::class, 'update'])->name('update');
Route::delete('/inventario/{id}', [App\Http\Controllers\InventarioController::class, 'destroy'])->name('destroy');


//Routing Cooordinacion
Route::get('/coordinacion', [App\Http\Controllers\CoordinacionController::class, 'index'])->name('coordinacion');
Route::get('/coordinacion/create', [App\Http\Controllers\CoordinacionController::class, 'create'])->name('create');
Route::post('/coordinacion/store', [App\Http\Controllers\CoordinacionController::class, 'store'])->name('store');
Route::get('/coordinacion/{id}', [App\Http\Controllers\CoordinacionController::class, 'edit'])->name('edit');
Route::put('/coordinacion/{id}', [App\Http\Controllers\CoordinacionController::class, 'update'])->name('update');
Route::delete('/coordinacion/{id}', [App\Http\Controllers\CoordinacionController::class, 'destroy'])->name('destroy');

//Routing Cooordinacion
Route::get('/actividades', [App\Http\Controllers\ActividadesController::class, 'index'])->name('actividades');
Route::get('/actividades/create', [App\Http\Controllers\ActividadesController::class, 'create'])->name('create');
Route::post('/actividades/store', [App\Http\Controllers\ActividadesController::class, 'store'])->name('store');
Route::get('/actividades/{id}', [App\Http\Controllers\ActividadesController::class, 'edit'])->name('edit');
Route::put('/actividades/{id}', [App\Http\Controllers\ActividadesController::class, 'update'])->name('update');
Route::delete('/actividades/{id}', [App\Http\Controllers\ActividadesController::class, 'destroy'])->name('destroy');
