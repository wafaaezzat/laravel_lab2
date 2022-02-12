<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;
class birthdate
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
       

        // $age = Carbon::parse($request->birthdate)->diff(Carbon::now())->y;
        
        // dd( \auth()->user()->birthdate);

        if( Carbon::parse(\auth()->user()->birthdate)->diff(Carbon::now())->y >30){
            return $next($request);
        }
        else{
            return \redirect()->route('dashboard') ;
        }
    }
}
