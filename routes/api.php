<?php

use Core\User\Controllers\API\V1\Auth\AuthController;
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


Route::get('pla',[AuthController::class,'pla']);



Route::prefix('user/auth')->middleware(['guest:user-api'])->group(function () {
Route::post('login',[AuthController::class,'login']);
    
});
