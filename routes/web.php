<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DispositivoController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/sensor', function () {
        return view('sensor');
    })->name('sensor');
    Route::get('/dispositivo', function () {
        return view('dispositivo');
    })->name('dispositivo');
    Route::get('/alterar-dispositivo', function () {
        return view('alterarDispositivo');
    })->name('alterar-dispositivo');
    
});

////////////////////////////////////////   Sensor   ////////////////////////////////////////
Route::get('/sensor', [SensorController::class, 'MostrarSensor'])->name('sensor');

////////////////////////////////////////   Dispositivo   ////////////////////////////////////////

//Salvar dados do dispositivo no banco:
Route::post('/dispositivo', [DispositivoController::class, 'SalvarBancoDispositivo'])->name('salvar-banco-dispositivo');