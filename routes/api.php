<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanySettingController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GoogleAnalyticsController;
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
    Route::get('update-company-setting', [CompanySettingController::class, 'getCompanySettings']);
    Route::post('update-company-setting', [CompanySettingController::class, 'updateCompanySetting']);
});
Route::post('get-in-touch', [EmailController::class, 'sendGetInTouchEmail'])->name('send.get-in-touch');
Route::get('analytics', [GoogleAnalyticsController::class, 'index']);