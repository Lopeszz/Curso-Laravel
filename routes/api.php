<?php

use App\Http\Controllers\PrevisaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('previsao-todos', [PrevisaoController::class, 'index']);
Route::post('previsao-salvar', [PrevisaoController::class, 'store']);
Route::get('previsao-mostrar/{id}', [PrevisaoController::class, 'show']);
Route::put('previsao-update/{id}', [PrevisaoController::class, 'update']);
Route::delete('previsao-destroy/{id}', [PrevisaoController::class, 'destroy']);


Route::resource('previsao', PrevisaoController::class);