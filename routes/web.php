<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/pengalaman-projek', function () {
    return view('pengalamanprojek');
});
