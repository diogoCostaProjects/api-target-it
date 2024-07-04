<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/tokens/register', [UserController::class, 'register']);
Route::post('/tokens/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    die('lista');
});