<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\Platillo_OrdenController;

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


Route::get('/reservacion',[ReservationController::class, 'index']);
//Route::get('/platillo',[PlatilloController::class, 'index']);
// Route::get('/reservacion/{id}',[ReservationController::class, 'show']);

Route::resource('/reservation',ReservationController::class);
Route::resource('/platillo',PlatilloController::class);
Route::resource('/orden',OrdenController::class);
Route::resource('/mesa',MesaController::class);
Route::resource('/platillo_orden',Platillo_OrdenController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
