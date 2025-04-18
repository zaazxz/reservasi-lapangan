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

// Backend Admin
Route::get('/admin', function() {
    return view('admin.pages.dashboard.index', [
        'title' => 'Dashboard',
        'headingTitle' => 'Dashboard'
    ]);
});

Route::get('/admin/reports', function() {
    return view('admin.pages.reports.index', [
        'title' => 'Reports',
    ]);
});

Route::get('/admin/vouchers', function() {
    return view('admin.pages.vouchers.index', [
        'title' => 'Vouchers',
    ]);
});

Route::get('/admin/reservations', function() {
    return view('admin.pages.reservations.index', [
        'title' => 'Reservations',
        'headingTitle' => 'Reservations'
    ]);
});

Route::get('/admin/fields', function() {
    return view('admin.pages.fields.index', [
        'title' => 'Fields',
        'headingTitle' => 'Fields'
    ]);
});
