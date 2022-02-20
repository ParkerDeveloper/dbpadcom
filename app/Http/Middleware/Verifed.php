<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Toastr;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Verifed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->verifed)
        {
            return $next($request);
        }
        return redirect('/')->with("no_dostup", 'У вас не достачно прав чтобы просматривать данную страницу!');
    }
}
