<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Hero;
use App\Models\Item;
use App\Models\Order;
use App\Models\Service;
use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    // Arabic
    public function arHome(){
        $trucks =Truck::where('lang', 'ar')->get() ;
        $countries = Country::where('lang', 'ar')->get();
        $services = Service::all() ;
        $about = About::where('lang', 'ar')->get();
        $hero = Hero::where('lang','ar')->get();
        return view('website', compact('trucks','countries','services', 'about', 'hero'));
    }
    // English
    public function enHome(){
        $trucks =Truck::where('lang', 'en')->get() ;
        $countries = Country::all();
        $services = Service::where('lang', 'en')->get() ;
        $about = About::where('lang', 'en')->get();
        $hero = Hero::where('lang','en')->get();
        return view('en-website', compact('trucks','countries','services', 'about', 'hero'));
    }
    // ############################################################################################
    // Arabic
    public function areas(Item $item){
        $trucks = Truck::all() ;
        $countries = Country::all();
        $services = Service::all() ;
        $about = About::where('lang', 'ar')->get();
        $hero = Hero::where('lang','ar')->get();
       return view('portfolio', compact('item','trucks','countries','services', 'about', 'hero'));

    }

    // English
    public function enAreas(Item $item){
        $trucks = Truck::all() ;
        $countries = Country::all();
        $services = Service::all() ;
        $about = About::where('lang', 'ar')->get();
        $hero = Hero::where('lang','ar')->get();
       return view('portfolio', compact('item','trucks','countries','services', 'about', 'hero'));
    }
// ###########################################################################################
    // Arabic
    public function services(Service $service){
        $countries = Country::all();
        return view('layouts.website.pages.ar.service', compact('service', 'countries'));
        
    }
    // English
    public function enServices(Service $service){
        // dd($service);
        $countries = Country::all();
        return view('layouts.website.pages.en.service', compact('service', 'countries'));
        
    }

    // ############################################################################
    // Arabic
    public function truck(Truck $truck){

        $countries = Country::all();
        return view('layouts.website.pages.ar.truck', compact('truck','countries'));
    }
    // English
    public function arTruck(Truck $truck){

        $countries = Country::all();
        return view('layouts.website.pages.ar.truck', compact('truck','countries'));
    }

    // #############################################################################
    public function makeOrder(Truck $truck){
        $countries = Country::all();
        return view('layouts.website.pages.ar.order', compact('truck','countries'));
    }
    public function saveOrder(Request $request){
        $truck = Truck::findOrFail($request->truck_id);
        $data = new Order($request->all());
        if($truck){
            $truck->orders()->save($data);
            return redirect()->back()->with('order','Your Order Delivered');
        }
    }

    public function land(){
        $countries = Country::all();
        return view('layouts.website.pages.ar.services.land',compact('countries'));
    }
    public function sea(){
        $countries = Country::all();
    return view('layouts.website.pages.ar.services.sea',compact('countries'));
    }
    public function air(){
        $countries = Country::all();
        return view('layouts.website.pages.ar.services.air',compact('countries'));
    }
    public function cars(){
        $countries = Country::all();
        return view('layouts.website.pages.ar.services.cars',compact('countries'));
    }
    public function furniture(){
        $countries = Country::all();
        return view('layouts.website.pages.ar.services.furniture',compact('countries'));
    }

    public function contact(ContactRequest $request){
        Contact::create($request->all());
        return redirect()->back()->with('email', 'Your message has been sent. Thank you!');
    }
}
