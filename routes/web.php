<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/tweet', [TweetController::class, 'index'])->name('home');
    Route::post('/tweet', [TweetController::class, 'store']);
});

Route::get('profile/{user}', [ProfileController::class, 'show'])->name('profile');

Auth::routes();
