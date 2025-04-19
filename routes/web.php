<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
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


// Reservations
Route::get('/admin/reservations', [BookingController::class, 'index']);
Route::get('/admin/reservations/create', [BookingController::class, 'create']);
Route::get('/admin/reservations/show/{id}', [BookingController::class, 'show']);
Route::get('/admin/reservations/delete/{id}', [BookingController::class, 'destroy']);
Route::get('/admin/reservations/cancel/{id}', [BookingController::class, 'cancel']);
Route::get('/admin/reservations/paid/{id}', [BookingController::class, 'paid']);
Route::post('/admin/reservations/store', [BookingController::class, 'store']);

// DOM Manipulation
Route::get('/admin/fields/request/{field}', [BookingController::class, 'request']);

// Fields
Route::get('/admin/fields', [FieldController::class, 'index']);
Route::get('/admin/fields/create', [FieldController::class, 'create']);
Route::get('/admin/fields/edit/{field}', [FieldController::class, 'edit']);
Route::get('/admin/fields/delete/{field}', [FieldController::class, 'destroy']);
Route::post('/admin/fields/store', [FieldController::class, 'store']);
Route::post('/admin/fields/update/{field}', [FieldController::class, 'update']);
