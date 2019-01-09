<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Store;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class StoresController extends Controller
{
    public function store($id){
      $stores = Store::find($id);
      $offers = Offer::get();
      return view('stores.index', compact('stores', 'offers'));
    }
}
