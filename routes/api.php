<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
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
Route::post('crear', [NotificacionController::class, 'crear']);

// Route::get('obtenerPaciente', [PacienteController::class, 'obtenerPaciente']);
// Route::get('obtenerMedicos', [MedicoController::class, 'obtenerMedicos']);
// Route::get('obtenerConsultas', [ConsultaController::class, 'obtenerConsultas']);
// Route::post('crearConsulta', [ConsultaController::class, 'crearConsulta']);
// Route::post('eliminarConsulta', [ConsultaController::class, 'eliminarConsulta']);
