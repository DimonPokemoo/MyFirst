<?php

namespace App\Http\Middleware;

use App\Models\Offer;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class OfferBlock
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

        $offers = Offer::find($request->route()->parameter('id'));
        $users = User::find($request->route()->parameter('id'));

        if (Auth::user()->role === 'ADMIN'
            || Auth::user()->id === $offers['user_id']
            || Auth::user()->id === $users['id']
        ) {
            return $next($request);
        }

        return redirect('/');

    }
}
