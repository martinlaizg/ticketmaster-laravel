<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OnlyUser
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
        $id = $request->route('id');

        if(Auth::user() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        else {
            if(Auth::user() && Auth::user()->id == $id) {
                return $next($request);
            }

            else {
                return redirect('/unauthorized');
            }
        }
    }
}
