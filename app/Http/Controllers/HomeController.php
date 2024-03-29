<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Country;
use App\Models\Hero;
use App\Models\Item;
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

    public function areas(Item $item){
        $trucks = Truck::all() ;
        $countries = Country::all();
        $services = Service::all() ;
        $about = About::where('lang', 'ar')->get();
        $hero = Hero::where('lang','ar')->get();
       return view('portfolio', compact('item','trucks','countries','services', 'about', 'hero'));

    }

    public function service(Service $service){
        $countries = Country::all();
        return view('layouts.website.pages.ar.service', compact('service', 'countries'));
        
    }
    public function truck(Truck $truck){

        $countries = Country::all();
        return view('layouts.website.pages.ar.truck', compact('truck','countries'));
    }
}
