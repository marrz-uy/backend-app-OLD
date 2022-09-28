<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PuntosInteresController;
use App\Http\Controllers\TranslationsController;
use App\Http\Controllers\UserProfileController;
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
Route::PATCH('updateEmail/{id}', [AuthController::class, 'userEmailUpdate']);
Route::PATCH('updateName/{id}', [AuthController::class, 'userNameUpdate']);
Route::PATCH('updatePassword/{id}', [AuthController::class, 'userPasswordUpdate']);
Route::POST('deleteUsers', [AuthController::class, 'deleteUsersAfterTesting']);


Route::GET('/userProfile/{id}', [UserProfileController::class, 'showUserProfile']);
Route::POST('/userProfile', [UserProfileController::class, 'insertUserProfile']);
Route::PATCH('/userProfile/{id}', [UserProfileController::class, 'updateUserProfile']);
Route::DELETE('/userProfile/{id}', [UserProfileController::class, 'deleteUserProfile']);

Route::GET('/PuntosInteres/nombre/{nombre}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorNombre']);
Route::GET('/PuntosInteres/categoria/{categoria}', [PuntosInteresController::class, 'ListarPuntosDeInteresPorCategoria']);

Route::GET('/translations', [TranslationsController::class, 'fetchTranslations']);
Route::POST('/translations', [TranslationsController::class, 'saveTranslations']);
