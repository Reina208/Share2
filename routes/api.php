<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SharesController;
use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\CommentsController;

Route::apiResource('/shares', SharesController::class);
Route::post('/register', [RegisterController::class, 'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::post('/logout', [LogoutController::class, 'post']);
Route::get('/user', [UsersController::class, 'get']);
Route::put('/user', [UsersController::class, 'put']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like', [LikesController::class, 'delete']);
Route::post('/comment', [CommentsController::class, 'post']);