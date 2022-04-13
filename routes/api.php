<?php

use App\Http\Controllers\ArticuloController;
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

//TODO: Rutas de la api
Route::get('/articulos', [ArticuloController::class, 'index']); //mostrar todos los registros
Route::post('/articulos', [ArticuloController::class, 'store']); //crear un registro
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);//actualizar un registro
Route::delete('articulos/{id}', [ArticuloController::class, 'destroy']);//eliminar un registro
