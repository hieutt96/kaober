<?php

namespace App\Http\Middleware;

use Closure;

class CkeckUser
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
        if(!Auth::check()){
            // xử lý sau
            // return redirect()->route('/')->with(['messages'=>['Bạn chưa đăng nhập']]);
        }
        return $next($request);
    }
}
