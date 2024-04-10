<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequst;
use App\Http\Requests\ItemUpdatRequest;
use App\Models\Country;
use App\Models\Detail;
use App\Models\Item;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str ;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id','desc')->paginate(5);
        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Item ;
        $countries = Country::all();
        $services = Service::all();
        return view('items.create', compact('item','countries', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequst $request)
    {
        $country = Country::find($request->country_id);
        $data = $request->validated(); 
        $data['slug'] = Str::slug($request->input('name'), "-");
        // $country = Country::find($request->county_id);
        // dd($data);
        if ($request->hasFile('image_path')) {
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtention ;
            $path = 'items' ;
            $request->file('image_path')->move($path, $fileName);

            $data['image_path'] = $fileName ;
        }
         ;
        if ($country->items()->create($data)) {
            return redirect()->route('items.index')->with('status', 'Items Created Successsfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show' , compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $countries = Country::all();
        $services = Service::all();
        return view('items.edit', compact('item','countries', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(ItemUpdatRequest $request, Item $item)
    {
        $data = $request->validated(); 
        if ($request->hasFile('image')) {
            $fileExtention = $request->file('image_path')->getClientOriginalExtension();
            $fileName = time() . '.' . $fileExtention ;
            $path = 'items' ;
            $request->file('image_path')->move($path, $fileName);

            $data['image_path'] = $fileName ;
        }
        
        if ($item->update($data)) {
            return redirect()->route('items.index')->with('status', 'Items Updated Successsfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('status', 'Items Deleted Successsfully');
    }

    public function createDetails(Item $item){

        return view('details.create', compact('item'));
    }

    public function storeDetails( Request $request){
        // dd($request->all());
        $item = Item::findOrFail($request->item_id);
        //dd($item);
        $data = new Detail($request->all());
        if ($item) {
            $item->details()->save($data);
            return redirect()->back()->with('success', 'Details Add Successfully');
        }

         echo 'ERRO';

       
    }
    public function deleteDetails(Detail $detail){
        $detail->delete();

    }
}
