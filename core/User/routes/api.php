<?php

use Core\User\Controllers\API\V1\Auth\AuthController;


Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::prefix('v1')->name('api.v1.')->group(function () {
       


Route::group(['middleware' => 'guest:user-api'], function() {
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
});

Route::group(['middleware' => 'auth:sanctum'], function() {
Route::get('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'user']);
});
    });
});