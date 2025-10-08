<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // tambahkan ini!

Route::get('/', function () {
    return view('welcome');
});

// Gunakan hanya route controller untuk /home
Route::get('/home', [HomeController::class, 'index']);
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('send.message');