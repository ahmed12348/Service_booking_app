@extends('dashboard.layout')

@section('title', 'Admin')

@section('content')
<h1>Admin Dashboard</h1>
<p>Total Sales: 0</p>
<p>Total Orders: 0</p>

<h3>Top Products</h3>
<ul>
{{-- @foreach($topProducts as $product)
        <li>{{ $product->name ? $product->name : 'No product'}} ({{ $product->sales ? $product->sales : 'No product'}}  sales)</li>
    @endforeach --}}
</ul>
@endsection