<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthApiMiddleware
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
        //$http=Http::get(env('API_BASE_URL') . '/auth/attempt');
        //if($http->object()){
            return $next($request);
        //}
        //return redirect()->route("logout");
    }
}
