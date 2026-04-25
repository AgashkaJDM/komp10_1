<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('foods', App\Http\Controllers\FoodController::class);
Route::resource('restaurants', App\Http\Controllers\RestaurantController::class);
Route::resource('users', App\Http\Controllers\UserController::class);

