<?php

use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', function () {
    return view('pages.landing.index', [
        'title' => 'Beranda',
    ]);
});

Route::get('/schedule', function() {
    return view('pages.schedule.index', [
        'title' => 'Jadwal',
    ]);
});

Route::get('/reservation', function() {
    return view('pages.reservation.index', [
        'title' => 'Reservasi',
    ]);
});

Route::get('/price', function() {
    return view('pages.price.index', [
        'title' => 'Harga Lapangan',
    ]);
});

Route::get('/about', function() {
    return view('pages.about.index', [
        'title' => 'Tentang Kami',
    ]);
});

Route::get('/login', function() {
    return view('auth.login.index', [
        'title' => 'Login',
    ]);
});
