<?php

use App\Http\Controllers\API\PacienteController;
use App\Http\Controllers\APISanctum\AutentificarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('pacientes', [PacienteController::class, 'index']);
// Route::post('pacientes', [PacienteController::class, 'store']);
// Route::get('pacientes/{paciente}', [PacienteController::class, 'show']);
// Route::put('pacientes/{paciente}', [PacienteController::class, 'update']);
// Route::delete('pacientes/{paciente}', [PacienteController::class, 'destroy']);
// Route::apiResource('pacientes', PacienteController::class);
/*************************
 * RUTAS PARA APISanctum *
 *************************/
Route::post('usuarios/registro', [AutentificarController::class, 'registro']);
Route::post('usuarios/acceso', [AutentificarController::class, 'acceso']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('pacientes', PacienteController::class);
    Route::post('usuarios/salir', [AutentificarController::class, 'salir']);
});