<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return redirect()->route('buku.index');
});

// Route resource untuk CRUD buku
Route::resource('buku', BukuController::class);
