<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoserviceRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Http\Requests\ServiceUpdatRequest;
use App\Models\CoService;
use App\Models\Country;
use App\Models\Service;
use App\Models\Story;
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
        $services = Service::orderBy('id','desc')->paginate(5);
        return view('admin.services.index', compact('services'));
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
    public function store(Request $request)
    {
        
        // dd($request->all()) ;
        $data = $request->all() ;
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
    public function update(ServiceUpdateRequest $request, Service $service)
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

    public function createStory (Service $service){

        return view('stories.create', compact('service'));
    }

    public function storeStory (Request $request){

        // dd($request->all());
        $service = Service::findOrFail($request->item_id);
        //dd($item);
        $data = new Story($request->all());
        if ($service) {
            $service->stories()->save($data);
            return redirect()->back()->with('success', 'Story Service Add Successfully');
        }

         echo 'ERRO';

    }

    public function deleteStory (Story $story){

       $story->delete();
    }


    
}
