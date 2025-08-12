<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoltarController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-user', [UserController::class, 'create'])->name('users.create');
Route::get('/index', [VoltarController::class, 'voltar'])->name('welcome');
Route::post('/store-user', [UserController::class, 'store'])->name('users.store');
