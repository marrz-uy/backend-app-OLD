<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PuntosInteresController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\TranslationsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::POST('login', [AuthController::class, 'login']);
Route::POST('register', [AuthController::class, 'register']);
Route::POST('logout', [AuthController::class, 'logout']);
Route::POST('refresh', [AuthController::class, 'refresh']);
Route::POST('me', [AuthController::class, 'me']);


Route::middleware('api')->get('/userProfile', function (Request $request) {
    return $request->userProfile();
});
Route::get('/userProfile/{id}', [UserProfileController::class, 'show']);
Route::post('/userProfile', [UserProfileController::class, 'store']);
Route::patch('/userProfile/{id}', [UserProfileController::class, 'update']);
Route::delete('/userProfile/{id}', [UserProfileController::class, 'destroy']);

Route::get('/PuntosInteres/{Categoria}', [PuntosInteresController::class, 'ListarPuntosDeInteres']);
Route::post('/PuntosInteres', [PuntosInteresController::class, 'store']);

Route::middleware('api')->get('/translations', function (Request $request) {
    return $request->translations();
});
Route::get('/translations', [TranslationsController::class, 'fetchTranslations']);
Route::post('/translations', [TranslationsController::class, 'saveTranslations']);
