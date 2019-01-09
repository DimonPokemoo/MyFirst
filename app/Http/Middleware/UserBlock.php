<?php

namespace App\Http\Middleware;

use App\Models\Offer;
use App\Models\User;
use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

class UserBlock
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $users = User::find($request->route()->parameter('id'));
        if (Auth::user()->role=='ADMIN'
            || Auth::user()->id==$users['id']){
            return $next($request);
        }
        return redirect('/users');
    }
}
