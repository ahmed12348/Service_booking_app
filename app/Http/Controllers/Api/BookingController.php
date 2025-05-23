<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'service'])->get();

        return response()->json([
            'success' => true,
            'data' => $bookings,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date',
        ]);

        $booking = new Booking();
        $booking->user_id = auth()->id(); // ✅ Get user ID from JWT
        $booking->service_id = $request->service_id;
        $booking->booking_date = $request->booking_date;
        $booking->save();

        return response()->json(['message' => 'Booking created successfully', 'booking' => $booking], 201);
    }
}
