<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(

);

Route::post('/tweet', [TweetController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
