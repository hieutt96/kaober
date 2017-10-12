<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class CkeckAdmin
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
        if(!(Auth::check() && Auth::user()->level == 1 && Auth::user()->status == 1)){
            return redirect()->route('login')->with(['messages'=>['Bạn chưa đăng nhập']]);
        }
        return $next($request);
    }
}
