<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service ;
        $countries = Country::select('id','name')->get() ;
        return view('services.create', compact(['service','countries']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $country = Country::find($request->country_id);
        $data = $request->validated() ;
        if($request->hasFile('image_path')){
            $filePath = Storage::disk('public')->put('image/services/images', $request->file('image_path'), 'public');
            $data['image_path'] = $filePath ;
        }
        if ($country->services()->create($data)) {
            return redirect()->route('services.index')->with('status', 'Service Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.show' , compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $countries = Country::all();
        return view('services.edit', compact('service','countries')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        if ($request->hasFile('image_path')) {
            Storage::disk('public')->delete($service->image_path);
            $filePath = Storage::disk('public')->put('image/services/images', $request->file('image_path'), 'public');
            $data['image_path'] = $filePath ;
        }
        if ($service->update($data)) {
            return redirect()->route('services.index')->with('status', 'Service Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::disk('public')->delete($service->image_path);
        $service->delete();
        return redirect()->route('services.index')->with('status', 'Service Deleted Successfully');

    }
}
