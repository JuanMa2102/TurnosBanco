<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CajeroController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\EmpleadoCajaController;
use App\Http\Controllers\TurnoClienteController;
use App\Http\Controllers\PantallaController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/turno', [TurnoController::class, 'getOperations'])->name('turno.getOperations');
Route::post('/turno', [TurnoController::class, 'store'])->name('turno');


Route::get('ticket/{id}', [TicketController::class, 'mostrarTicket'])->name('ticket');;

//Cajeros ABC
Route::get('/cajeros', [UserController::class, 'index'])->middleware('logeado')->name('cajeros.index');
Route::get('/cajeros/create', [UserController::class, 'create'])->middleware(['auth'])->name('cajeros.create');
Route::get('/cajeros/{id}', [UserController::class, 'destroy'])->name('cajeros.destroy');

Route::get('/cajeros', [CajeroController::class, 'mostrarCajero'])->middleware(['auth'])->name('fakeLogin');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/caja', [CajaController::class, 'store'])
                ->middleware('auth');

Route::get('/caja', [CajaController::class, 'create'])
                ->middleware('auth')
                ->name('register-caja');
                
Route::get('/caja/{id}', [CajaController::class, 'destroy'])
                ->name('caja.destroy');

Route::POST('/empleado-caja', [CajaController::class, 'empleado_caja'])
                ->name('empleado-caja');

Route::get('/AbrirCaja/{id}', [EmpleadoCajaController::class, 'abrirCaja'])->middleware(['auth'])->name('atender_caja');;

Route::get('/turno-cliente', [TurnoClienteController::class, 'mostrarTurnos'])
                ->name('turno-cliente');

Route::get('/pantalla', [PantallaController::class, 'verTurnos'])->name('verTurnos');

//Route::get('/mostrar-users', [PantallaController::class, 'verTurnos'])->name('rest.getMostrarUsers');

require __DIR__.'/auth.php';