<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    use ApiResponseTrait;
    
    public function index()
    {
      $bookings = Booking::with(['user', 'service'])->get();

      return $this->successResponse('Bookings retrieved successfully', $bookings);
    }

    public function store(StoreBookingRequest $request)
    {
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'booking_date' => $request->booking_date,
        ]);

        return $this->successResponse('Booking created successfully', $booking, 201);
    }
}
