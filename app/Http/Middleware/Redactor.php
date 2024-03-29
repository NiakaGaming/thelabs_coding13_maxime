<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Redactor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id == 2) {
            return $next($request);
        } else {
            return redirect()->back()->withErrors(["msg", "Vous n'avez pas les droits suffisant pour accèder à cette page."]);
        }
    }
}
