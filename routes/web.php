<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $fumetti = config('fumetti');

    return view('home', compact('fumetti'));


})->name('home');

Route::get('news', function () {
    return view('news');

})->name('news');