<?php

use App\Http\Controllers\CoffeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('pages.index');
});

Route::resource('/kopi', CoffeeController::class);
