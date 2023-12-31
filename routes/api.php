<?php


use App\Http\Controllers\IngpastelController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PastelController;
use App\Http\Controllers\UserController;
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

Route::apiResource("v1/pastels", PastelController::class);
Route::apiResource("v1/ingredientes", IngredienteController::class);
Route::apiResource("v1/ingpastel", IngpastelController::class);
Route::apiResource("v1/usuarios", UserController::class);