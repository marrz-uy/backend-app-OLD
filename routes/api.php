<?php

use App\Http\Controllers\AuthController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);


Route::middleware('api')->get('/userProfile', function (Request $request) {
    return $request->userProfile();
});

Route::get('/userProfile/{id}', [UserProfileController::class, 'show']);
Route::post('/userProfile', [UserProfileController::class, 'store']);
Route::patch('/userProfile/{id}', [UserProfileController::class, 'update']);
Route::delete('/userProfile/{id}', [UserProfileController::class, 'destroy']);
