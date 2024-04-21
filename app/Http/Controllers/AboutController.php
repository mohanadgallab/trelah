<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequst;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::paginate();

        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = new About ;

        return view('about.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequst $request)
    {
        $data = $request->validated();
        // dd($data);
        if($request->hasFile('image_path')){
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtention ;
            $path = 'about';
            $request->file('image_path')->move($path, $fileName);
            $data['image_path'] = $fileName;
        }
        $about = About::create($data);

        if ($about) {
            return redirect()->route('about.index')->with('status', 'About Info Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('about.show', compact('aboute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequst $request, About $about)
    {
        $data = $request->validated();
        // dd($data);
        if($request->hasFile('image_path')){
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtention ;
            $path = 'about';
            $request->file('image_path')->move($path, $fileName);
            $data['image_path'] = $fileName;
        }
        // $about = About::create($data);

        if ($about->update($data)) {
            return redirect()->route('about.index')->with('status', 'About Info Udated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('status', 'About Info Deleted Successfully');
    }
}
