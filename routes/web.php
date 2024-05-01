<?php

use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Route;

Route::resource('produk', produkController::class);
