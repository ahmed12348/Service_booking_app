<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

   public function store(ServiceRequest $request)
    {
        Service::create($request->only(['name', 'description', 'price']));
        return redirect()->route('admin.services.index')->with('success', 'Service created.');
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->only(['name', 'description', 'price']));
        return redirect()->route('admin.services.index')->with('success', 'Service updated.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }
}


