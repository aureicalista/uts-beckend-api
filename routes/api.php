<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group( function () {
    Route::post('auth/register', App\Http\Controllers\Api\Auth\RegisterController::class);
    Route::post('auth/login', \App\Http\Controllers\Api\Auth\LoginController::class);

    Route::middleware('auth:sanctum')->group(function () {
    Route::post('auth/logout', \App\Http\Controllers\Api\Auth\LogoutController::class);
    Route::resource('categories', \App\Http\Controllers\Api\CategoryController::class)->except(['edit']);
    Route::resource('produk', \App\Http\Controllers\Api\ProductController::class)->except(['edit']);

    });

}); 
