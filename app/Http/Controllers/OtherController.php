<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\Service;
use App\Http\Requests\OtherRequest as OtherR ;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others = Other::all();

        return view('other.index', compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $other = new Other ;
        $services = Service::all();

        return view('other.create', compact('other', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // dd($request->all());
        Other::create($request->all());
        return redirect()->route('others.index')->with('status', 'DONE');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        return view('other.show', compact('other'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        $services = Service::all();
        return view('other.edit', compact('other','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        $other->update($request->all());
        return redirect()->route('others.index')->with('status', 'DONE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        $other->delete();
        return redirect()->route('others.index')->with('status', 'DONE');
    }
}
