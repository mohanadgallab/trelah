<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Http\Requests\CountryUpdatRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str ;

class CountryController extends Controller
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
        $countries = Country::all();

        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = new Country ;

        return view('countries.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->input('name'), "-");
        if ($request->hasFile('image_path')) {
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'countries';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;
        }

        $country = Country::create($data);
        if ($country) {
            return redirect()->route('countries.index')->with('status', 'Country Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdatRequest $request, Country $country)
    {
        $data = $request->validated() ;

        if ($request->hasFile('image_path')) {
            //Storage::disk('public')->delete($country->image_path);

            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' .$fileExtention ;
            $path = 'countries';
            $request->file('image_path')->move($path,$fileName);

            $data['image_path'] = $fileName ;
        }
        if ($country->update($data)) {
            return redirect()->route('countries.index')->with('status', 'Country Updated Successfully');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        // Storage::disk('public')->delete($country->image_path);
        $country->delete();

        return redirect()->route('countries.index')->with('status', 'Country Deleted Successfully');
    }
}
