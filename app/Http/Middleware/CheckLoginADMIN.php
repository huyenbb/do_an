<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class CheckLoginADMIN
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
        if ($request->session()->exists('idADMIN')) {
            return $next($request);
        } else {
            return Redirect::route('loginADMIN')->with('error', 'Chưa Đăng Nhập');
        }
    }
}
