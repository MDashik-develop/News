<?php

use App\Livewire\Frontend\Home;
use Illuminate\Support\Facades\Route;

// Route::get('/', Home::class)->name('home');
Route::get('/', function () {
    return view('home');
})->name('home');