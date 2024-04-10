<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Truck;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index (){
        $orders = Order::orderBy('id', 'desc')->paginate(5);
        return view('admin.orders.index', compact('orders'));
    }
    public function store(Request $request){
        $truck = Truck::findOrFail($request->truck_id);
        $truck->orders()->save($request->all());
        return 'OK' ;
    }
}
