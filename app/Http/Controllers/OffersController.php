<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Store;
//use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Illuminate\Support\Facades\Request;

class OffersController extends Controller
{
    public function index(){
        $offers = Offer::get();
        return view('offers.index', compact('offers'));
    }
    public function add(){
        $stores = Store::get();
        return view('offers.add', compact('stores'));
    }
    public function edit($id){
        $stores = Store::get();
        $offers = Offer::find($id);
        $typeObject = Offer::$typeObject;
        return view('offers.edit', compact('offers', 'typeObject', 'stores'));
    }
    public function delete($id){
        $offers = Offer::find($id);
        $offers->delete();

        return redirect()->route('offers');
    }
    public function submit(Request $request){
        Offer::create([
            'type_object' => $request->input('type_object'),
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),
            'currency' => $request->input('currency'),
            'phone' => $request->input('phone'),
            'extra_data' => $request->input('extra_data'),
            'store_id' => $request->input('store_id')
        ]);
        return redirect()->route('offers');
    }
    public function update(Request $request,$id){
        $offers = Offer::find($id);
        $offers->update([
            'type_object' => $request->input('type_object'),
            'brand' => $request->input('brand'),
            'price' => $request->input('price'),
            'currency' => $request->input('currency'),
            'phone' => $request->input('phone'),
            'extra_data' => $request->input('extra_data'),
            'store_id' => $request->input('store_id')
        ]);
        return redirect()->route('offers');
    }
}
