<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Asset\CategoryController;
use App\Http\Controllers\Asset\RoomController;
use App\Http\Controllers\Sanctum\TokensController;
use App\Http\Controllers\Auth\AuthorizationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

//login
Route::post('login', [AuthorizationController::class,'store']);
Route::post('logout', [AuthorizationController::class, 'destroy']);
Route::get('about', [AuthenticatedSessionController::class, 'profile']);

//tokens
Route::get('tokens',[TokensController::class, 'index'])->name('tokens.index');
Route::post('tokens', [TokensController::class, 'store'])->name('tokens.store');
Route::delete('tokens/clean', [TokensController::class, 'destroyAllTokens'])->name('tokens.clean');
Route::delete('tokens/{id}', [TokensController::class, 'destroy'])->name('tokens.destroy');

//categories
Route::delete('categories/{category}/disable', [CategoryController::class, 'disable'])->name('categories.disable');
Route::get('categories/{id}/enable', [CategoryController::class, 'enable'])->name('categories.enable');
Route::resource('categories', CategoryController::class)->except('edit','create');

//rooms
Route::delete('rooms/{room}/disable', [RoomController::class, 'disable'])->name('rooms.disable');
Route::get('rooms/{id}/enable', [RoomController::class, 'enable'])->name('rooms.enable');
Route::resource('rooms', RoomController::class)->except('edit', 'create');