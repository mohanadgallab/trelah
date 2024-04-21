<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroRequst;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::paginate() ;
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hero = new Hero ;
        return view('hero.create', compact('hero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeroRequst $request)
    {
        $data = $request->validated();
        
        $hero = Hero::create($data);

        if ($hero) {
            return redirect()->route('hero.index')->with('status', 'Hero Section Info Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view('hero.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(HeroRequst $request, Hero $hero)
    {
        $data = $request->validated();
        

        if ($hero->update($data)) {
            return redirect()->route('hero.index')->with('status', 'Hero Section Updated Added Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        return redirect()->route('hero.index')->with('status', 'Hero Section Deleted Added Successfully');
    }
}
