<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $fumetti = config('db.fumetti');

    return view('home', compact('fumetti'));


})->name('home');