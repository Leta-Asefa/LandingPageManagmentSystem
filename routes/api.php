<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::post('createHome', [HomeController::class,'createHome']);
Route::post('updateHome/{id}', [HomeController::class,'updateHome']);
Route::get('getJsonHome/{id}', [HomeController::class,"getJsonHome"]);
Route::get('getHome/{id}', [HomeController::class,"getHome"]);
Route::get('deleteHome/{id}', [HomeController::class,"deleteHome"]);
Route::get('getAllHomes', [HomeController::class,"getAllHomes"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
