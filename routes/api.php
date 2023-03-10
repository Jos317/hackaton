<?php

use App\Http\Controllers\Api\AlertaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\NotificacionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UsuarioController::class, 'login']);
Route::post('crear', [NotificacionController::class, 'crearNotificacion']);
Route::post('getAlerts', [AlertaController::class, 'getAlerts']);
// Route::get('obtenerMedicos', [MedicoController::class, 'obtenerMedicos']);
// Route::get('obtenerConsultas', [ConsultaController::class, 'obtenerConsultas']);
// Route::post('crearConsulta', [ConsultaController::class, 'crearConsulta']);
// Route::post('eliminarConsulta', [ConsultaController::class, 'eliminarConsulta']);
