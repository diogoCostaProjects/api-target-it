<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ROTAS DE TOKENIZAÇÃO DO SANCTUM
Route::post('/tokens/register', [UserController::class, 'register']);
Route::post('/tokens/login', [UserController::class, 'login']);

//ROTAS DE USUÁRIOS
Route::middleware('auth:sanctum')->post('/usuarios/adicionar', [UsuarioController::class, 'store']);