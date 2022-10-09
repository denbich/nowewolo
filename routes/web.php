<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->middleware('setlocale')->group(function(){
    Route::get('/', 'index')->name('home.index');
    Route::get('/privacy-policy', 'privacy_policy')->name('home.privacy-policy');
    Route::post('/send-message', 'send_message')->name('home.send-message');
});

// Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');
