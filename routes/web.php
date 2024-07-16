<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/kontak', function () {
    return view('kontak');
});