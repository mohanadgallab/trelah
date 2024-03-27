<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoserviceRequest;
use App\Http\Requests\CoserviceUpdateRequest;
use App\Models\CoService;
use App\Models\Service;
use Illuminate\Http\Request;

class CoServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $co = CoService::all(); 

        return view('co.index', compact('co'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {
        $co = new CoService ;
        return view('co.create', compact('co','service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoserviceRequest $request)
    {
        dd($request);
        $data = $request->validated();

        Service::create($data);

        return redirect()->route('services.show')->with('status', 'Co-service added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoService  $coService
     * @return \Illuminate\Http\Response
     */
    public function show(CoService $coService)
    {
        return view('co.show', compact('coService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoService  $coService
     * @return \Illuminate\Http\Response
     */
    public function edit(CoService $coService)
    {
        $services = Service::all();
        return view('co.edit', compact('coService', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoService  $coService
     * @return \Illuminate\Http\Response
     */
    public function update(CoserviceUpdateRequest $request, CoService $coService)
    {
        $data = $request->validated();
        if($coService->update()){
            return redirect()->route('services.show')->with('status', 'Co-service Updated successfully');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoService  $coService
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoService $coService)
    {
        $coService->delete();
        return redirect()->route('services.show')->with('status', 'Co-service Removed successfully');
    }
}
