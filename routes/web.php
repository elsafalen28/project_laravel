<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route ke method home
Route::get('/home', [PageController::class, 'home']);

// Route ke method about
Route::get('/about', [PageController::class, 'about']);
