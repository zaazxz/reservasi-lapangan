<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FieldController;
use App\Models\Booking;
use App\Models\Field;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', function () {
    return view('pages.landing.index', [
        'title' => 'Beranda',
    ]);
});

Route::get('/schedule', function () {
    return view('pages.schedule.index', [
        'title' => 'Jadwal',
    ]);
});

Route::get('/reservation', function () {
    return view('pages.reservation.index', [
        'title' => 'Reservasi',
        'fields' => Field::all(),
    ]);
});

Route::get('/price', function () {
    return view('pages.price.index', [
        'title' => 'Harga Lapangan',
    ]);
});

Route::get('/about', function () {
    return view('pages.about.index', [
        'title' => 'Tentang Kami',
    ]);
});

// Auth
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/masuk', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Dom Manipulation (without logged in)
Route::get('/events', [BookingController::class, 'events']);

// Backend Admin
Route::middleware('auth')->group(function () {
    
    Route::get('/admin', function () {
        return view('admin.pages.dashboard.index', [
            'title' => 'Dashboard',
            'headingTitle' => 'Dashboard',
            'reservations' => Booking::latest()->take(5)->get(),
            'reservationAll' => Booking::all()->count(),
            'reservationPending' => Booking::where('status', 'pending')->count(),
            'reservationConfirmed' => Booking::where('status', 'confirmed')->count(),
            'reservationCanceled' => Booking::where('status', 'cancelled')->count(),
            'reservationRevenue' => Booking::all()->sum('total_price'),
            'reservationRevenueNowMonth' => Booking::whereMonth('created_at', Carbon::now()->month)->sum('total_price'),
            'reservationOutstandingBalance' => Booking::where('status', 'pending')->sum('total_price'),
        ]);
    });

    Route::get('/admin/reports', function () {
        return view('admin.pages.reports.index', [
            'title' => 'Reports',
        ]);
    });

    Route::get('/admin/vouchers', function () {
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

});
