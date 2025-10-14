<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // tambahkan ini!
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/tickets');
});

// Gunakan hanya route controller untuk /home
Route::get('/home', [HomeController::class, 'index']);
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('send.message');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

