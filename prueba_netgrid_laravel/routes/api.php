<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('usuario/list',[UsuarioController::class, 'list']);

Route::post('usuario/create',[UsuarioController::class, 'create']);

Route::get('usuario/{id_usuario}',[UsuarioController::class, 'show']);

Route::get('usuario/{id_usuario}/edit',[UsuarioController::class, 'edit']);

Route::put('usuario/{id_usuario}',[UsuarioController::class, 'update']);

Route::delete('usuario/{id_usuario}',[UsuarioController::class, 'destroy']);

Route::get('tipoidentificacion/list',[UsuarioController::class, 'list']);

Route::post('tipoidentificacion/create',[UsuarioController::class, 'create']);

Route::get('tipoidentificacion/{id_tipoidentificacion}',[UsuarioController::class, 'show']);

Route::get('tipoidentificacion/{id_tipoidentificacion}/edit',[UsuarioController::class, 'edit']);

Route::put('tipoidentificacion/{id_tipoidentificacion}',[UsuarioController::class, 'update']);

Route::delete('tipoidentificacion/{id_tipoidentificacion}',[UsuarioController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
