<?php

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function index()
    {
        return view('admin.pages.reservations.index', [
            'title' => 'Reservations',
            'headingTitle' => 'Reservations',
            'reservations' => Booking::all()
        ]);
    }

    public function create()
    {
        $fields = Field::all();
        return view('admin.pages.reservations.create', [
            'title' => 'Create Reservations',
            'headingTitle' => 'Create Reservations',
            'fields' => $fields,
        ]);
    }

    public function request(Request $request)
    {

        // Searching Field ID Same by Request
        $field = Field::where('id', $request->field)->first();

        // Returning 
        return response()->json($field);
    }

    public function events() {
        
        $bookings = DB::table('bookings')
        ->whereNot('status', 'cancelled')
        ->get();

        $events = [];

        foreach ($bookings as $booking) {
            $events[] = [
                'title' => 'Booking Lapangan ' . $booking->customer_name,
                'start' => $booking->booking_date . 'T' . $booking->start_time,
                'end'   => $booking->booking_date . 'T' . $booking->end_time,
                'backgroundColor' => $booking->status == 'confirmed' ? '#435ebe' : '#6c757d',
                'borderColor' => $booking->status == 'confirmed' ? '#435ebe' : '#6c757d',
            ];
        }

        // return response()->json($bookings);
        return response()->json($events);

        // return response()->json([
        //     [
        //         'title' => 'Dummy Booking',
        //         'start' => '2025-04-20T10:00:00',
        //         'end' => '2025-04-20T11:00:00',
        //         'backgroundColor' => '#28a745',
        //         'borderColor' => '#28a745',
        //     ]
        // ]);

    }

    public function store(Request $request)
    {
        $data = (object) $request->validate([
            'customer_name' => '',
            'customer_phone' => '',
            'field_id' => '',
            'booking_date' => '',
            'start_time' => '',
            'end_time' => '',
            'total_price' => '',
            'total_payment' => '',
            'dp_amount' => '',
        ]);

        // dd($data);

        Booking::create([
            'id' => (string) Str::uuid(),
            'customer_name' => $data->customer_name,
            'customer_phone' => $data->customer_phone,
            'field_id' => $data->field_id,
            'booking_date' => $data->booking_date,
            'start_time' => $data->start_time,
            'end_time' => $data->end_time,
            'total_price' => $data->total_price,
            'dp_amount' => $data->dp_amount,
            'remaining_amount' => $data->total_price - $data->dp_amount,
            'total_payment' => $data->dp_amount,
            'payment_deadline' => Carbon::parse($data->booking_date)->subDays(1)->format('Y-m-d'),
        ]);

        if ($data) {
            return redirect('/admin/reservations')->with('success', 'Reservations created successfully');
        } else {
            return redirect('/admin/reservations') - with('error', 'Reservations created failed');
        }
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.pages.reservations.show', [
            'title' => 'Detail Reservations',
            'headingTitle' => 'Detail Reservations',
            'reservation' => $booking,
        ]);
    }

    public function cancel($id)
    {
        $booking = Booking::findOrFail($id);

        Booking::where('id', $booking->id)->update([
            'status' => 'cancelled',
            'remaining_amount' => 0,
        ]);

        if ($booking) {
            return redirect('/admin/reservations')->with('success', 'Reservations created successfully');
        } else {
            return redirect('/admin/reservations') - with('error', 'Reservations created failed');
        }
    }

    public function paid($id)
    {
        $booking = Booking::findOrFail($id);

        Booking::where('id', $booking->id)->update([
            'status' => 'confirmed',
            'remaining_amount' => 0,
            'total_payment' => $booking->dp_amount + $booking->remaining_amount
        ]);

        if ($booking) {
            return redirect('/admin/reservations')->with('success', 'Reservations created successfully');
        } else {
            return redirect('/admin/reservations') - with('error', 'Reservations created failed');
        }
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);

        Booking::destroy('id', $booking->id);

        if ($booking) {
            return redirect('/admin/reservations')->with('success', 'Reservations created successfully');
        } else {
            return redirect('/admin/reservations') - with('error', 'Reservations created failed');
        }
    }
}
