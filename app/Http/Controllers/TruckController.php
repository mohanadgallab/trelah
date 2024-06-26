<?php

// https://fajarwz.com/blog/laravel-10-crud-and-image-upload-tutorial-with-laravel-breeze-and-repo-example/
namespace App\Http\Controllers;

use App\Http\Requests\TruckRequest;
use App\Http\Requests\TruckUpdatRequest;
use App\Models\Truck;
// use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TruckController extends Controller
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
        $trucks = Truck::paginate(5);
        return view('admin.trucks.index', compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truck = new Truck();
        return view('trucks.create', compact('truck'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TruckRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();
        $data['slug'] = Str::slug($request->input('name'), "-");
        $data['lang'] = $request->input('lang');
        $data['area_1'] = $request->input('area_1');
        $data['area_2'] = $request->input('area_2');
        $data['area_3'] = $request->input('area_3');
        $data['area_4'] = $request->input('area_4');
        $data['area_5'] = $request->input('area_5');
        $data['area_6'] = $request->input('area_6');
        // dd($data);
        if ($request->hasFile('image_path')) {
            // $filePath = Storage::disk('trucks')->put('/', $request->file('image_path'));
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'trucks';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;
        }
        $truck = Truck::create($data);

        if ($truck) {
            return redirect()->route('trucks.index')->with('status', 'Truck Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        return view('trucks.show', compact('truck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(Truck $truck)
    {
        return view('trucks.edit', compact('truck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(TruckUpdatRequest $request, Truck $truck)
    {

        $data = $request->validated();

        if ($request->hasFile('image_path')) {
            // delete image
            Storage::disk('trucks')->delete($truck->image_path);
            

            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'trucks';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;;
        }

        $update = $truck->update($data);

        if ($update) {

            return redirect()->route('trucks.index')->with('status', 'Truck updated successfully!');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Truck $truck)
    {
        // Storage::disk('trucks')->delete($truck->image_path);
        $truck->delete();

        return redirect()->route('trucks.index')->with('status', 'Truck Deleted Successfully');
    }
}
