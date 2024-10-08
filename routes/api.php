<?php

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

use App\Http\Controllers\ApiController;

Route::get('/productos', [ApiController::class, 'obtenerProductos']);
Route::post('/productos', [ApiController::class, 'crearProducto']);
Route::get('/productos/{id}', [ApiController::class, 'obtenerProducto']);
Route::put('/productos/{id}', [ApiController::class, 'actualizarProducto']);
Route::delete('/productos/{id}', [ApiController::class, 'eliminarProducto']);