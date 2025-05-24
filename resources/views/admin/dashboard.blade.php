@extends('dashboard.layout')

@section('title', 'Admin')

@section('content')
<h3>Admin Dashboard</h3>

<div class="row">
    <!-- Total Users Card -->
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3 text-center">
            <div class="mt-3">Total Users</div>
            <div class="card-body">
                <h5 class="card-title">{{ $totalUsers ?? 0 }}</h5>
            </div>
        </div>
    </div>

    <!-- Total Bookings Card -->
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3 text-center">
            <div class="mt-3">Total Bookings</div>
            <div class="card-body">
                <h5 class="card-title">{{ $totalBookings ?? 0 }}</h5>
            </div>
        </div>
    </div>

    <!-- Total Services Card -->
    <div class="col-md-4">
        <div class="card text-white bg-info mb-3 text-center">
            <div class="mt-3">Total Services</div>
            <div class="card-body">
                <h5 class="card-title">{{ $totalServices ?? 0 }}</h5>
            </div>
        </div>
    </div>
</div>


@endsection
