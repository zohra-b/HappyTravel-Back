<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TripsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('/', [TripsController::class, 'index']);
Route::get('search', [TripsController::class,'search']);
Route::get('page', [TripsController::class, 'getPagination']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user-profile', [UserController::class, 'userProfile']); 
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('trip/{id}', [TripsController::class, 'getById']);
    Route::post('store', [TripsController::class, 'store']);
    Route::post('trip/{id}', [TripsController::class, 'update']);
    Route::delete('trip/{id}',[TripsController::class, 'destroy']);
    Route::get('trip/user/{user_id}', [TripsController::class, 'getTripsbyUserId']);
});

