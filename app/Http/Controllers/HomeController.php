<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Country;
use App\Models\Hero;
use App\Models\Service;
use App\Models\Truck;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function arHome(){
        $trucks = Truck::all() ;
        $countries = Country::all();
        $services = Service::all() ;
        $about = About::where('lang', 'ar')->get();
        $hero = Hero::where('lang','ar')->get();
        return view('website', compact('trucks','countries','services', 'about', 'hero'));
    }
}
