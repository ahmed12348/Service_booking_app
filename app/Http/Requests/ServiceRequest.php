<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Check request method to apply different validation if needed
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string|max:100',
                    'description' => 'nullable|string',
                    'price' => 'required|numeric|min:0',
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    'name' => 'required|string|max:100',
                    'description' => 'nullable|string',
                    'price' => 'required|numeric|min:0',
                ];

            default:
                return [];
        }
    }
}
