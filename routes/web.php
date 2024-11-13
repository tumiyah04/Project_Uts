<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

// Route utama diarahkan ke metode index di BarangController


// Route resource untuk membuat semua route CRUD
Route::resource('barangs', BarangController::class);




