<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        // Admin sees all bookings
        $bookings = Booking::with('user', 'service')->paginate(10);
        return view('admin.bookings.index', compact('bookings'));
    }

   public function create()
    {
        $users = User::all();
        $services = Service::all();
        return view('admin.bookings.create', compact('users', 'services'));
    }

    public function store(StoreBookingRequest $request)
    {
        Booking::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
        ]);

        return redirect()->route('admin.bookings.index')->with('success', 'Booking created successfully!');
    }
}
