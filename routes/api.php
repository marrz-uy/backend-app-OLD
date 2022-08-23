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
Route::GET('/userProfile/{id}', [UserProfileController::class, 'show']);
Route::POST('/userProfile', [UserProfileController::class, 'store']);
Route::PATCH('/userProfile/{id}', [UserProfileController::class, 'update']);
Route::DELETE('/userProfile/{id}', [UserProfileController::class, 'destroy']);

Route::GET('/PuntosInteres/{Categoria}', [PuntosInteresController::class, 'ListarPuntosDeInteres']);
Route::POST('/PuntosInteres', [PuntosInteresController::class, 'store']);

Route::middleware('api')->get('/translations', function (Request $request) {
    return $request->translations();
});
Route::GET('/translations', [TranslationsController::class, 'fetchTranslations']);
Route::POST('/translations', [TranslationsController::class, 'saveTranslations']);
