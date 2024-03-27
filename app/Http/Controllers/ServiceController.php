<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoserviceRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceUpdatRequest;
use App\Models\CoService;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str ;

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
        
        $data = $request->validated() ;
        $data['slug'] = Str::slug($request->input('name'), "-");
        if($request->hasFile('image_path')){
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'services';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;
        }
        $service = Service::create($data);
        if ($service) {
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
        $co = new CoService ;
        return view('services.show' , compact('service', 'co'));
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
    public function update(ServiceUpdatRequest $request, Service $service)
    {
        $data = $request->validated();
        // $data['slug'] = Str::slug($request->input('name'), "-");
        if ($request->hasFile('image_path')) {
            // Storage::disk('public')->delete($service->image_path);
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'services';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;
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


    public function coIndex(){

    }

    public function coStore(CoserviceRequest $request ,Service $service){
        
        // dd($request->all());
        // $service = Service::where( 'id' ,$request->service_id);
        // dd($request->all());
        // $service->CoServices()->create($request->all());
        $data = $request->validated();
        CoService::create($data);

        return redirect()->route('services.show', $request->service_id)->with('status', 'DONE');
    }
}
