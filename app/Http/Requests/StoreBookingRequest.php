<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        // Allow all authenticated users to make this request
        return true;
    }

    public function rules()
    {
        return [
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'required|date|after_or_equal:today',
        ];
    }

    public function messages()
    {
        return [
            'service_id.required' => 'Service ID is required.',
            'service_id.exists' => 'The selected service does not exist.',
            'booking_date.required' => 'Booking date is required.',
            'booking_date.date' => 'Booking date must be a valid date.',
            'booking_date.after_or_equal' => 'Booking date cannot be in the past.',
        ];
    }
}

