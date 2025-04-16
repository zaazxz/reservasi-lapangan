<?php 

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function create()
    {
        $fields = Field::all();
        return view('bookings.create', compact('fields'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'field_id' => 'required|exists:fields,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:255',
            'booking_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        // Hitung harga dan DP
        $field = Field::find($request->field_id);
        $totalPrice = $field->price_per_hour * (Carbon::parse($request->end_time)->diffInHours(Carbon::parse($request->start_time)));

        $dpAmount = $totalPrice * ($request->dp_percentage / 100);
        $dpDeadline = Carbon::now()->addDay(); // DP Deadline 1x24 jam

        // Simpan booking
        $booking = Booking::create([
            'field_id' => $request->field_id,
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'total_price' => $totalPrice,
            'dp_amount' => $dpAmount,
            'dp_deadline' => $dpDeadline,
            'status' => 'pending',
        ]);

        return redirect()->route('bookings.index')->with('success', 'Booking successfully created!');
    }

    public function updateStatus($id, $status)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $status;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking status updated!');
    }

    public function cancelBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'cancelled';
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking cancelled.');
    }
}
