<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
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

Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum:users'], function () {
    Route::get('validate-token', [AuthController::class, 'validateToken']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('portfolio', PortfolioController::class);
});