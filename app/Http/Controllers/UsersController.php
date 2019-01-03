<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends Controller
{
    public function index(){
        $users = User::get();
        return view('users.index', compact('users'));
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users');
    }
    public function edit($id){

        $users = User::find($id);

        return view('users.edit', compact('users','id'));
    }

}
