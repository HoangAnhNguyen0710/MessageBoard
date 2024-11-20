<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('messages', MessageController::class);
Route::get('/messages', [ MessageController::class, 'index'])->name('index');