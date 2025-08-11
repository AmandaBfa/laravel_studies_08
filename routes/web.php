<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Welcome to Laravel Studies - Foryify!";
})->middleware(['auth']);


// Route::view('/login', 'login')->name('login');
