@extends('dashboard.layout')

@section('title', 'Create Booking')

@section('content')
<div class="container">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Bookings</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Booking</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('bookings.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="user_id" class="form-label">Select User</label>
                            <select class="form-select" name="user_id" id="user_id" required>
                                <option value="" disabled selected>-- Select User --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="service_id" class="form-label">Select Service</label>
                            <select class="form-select" name="service_id" id="service_id" required>
                                <option value="" disabled selected>-- Select Service --</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="booking_date" class="form-label">Booking Date</label>
                            <input type="datetime-local" class="form-control" name="booking_date" id="booking_date" required>
                            @error('booking_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
