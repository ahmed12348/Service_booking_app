@extends('dashboard.layout')

@section('title', 'Services')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Services</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service List</li>
                </ol>
            </nav>
        </div>

        <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-success" href="{{ route('admin.services.create') }}">Create New Service</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if (session('success'))
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif

            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>${{ number_format($service->price, 2) }}</td>
                                <td>
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this service?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if ($services->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">No services found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
