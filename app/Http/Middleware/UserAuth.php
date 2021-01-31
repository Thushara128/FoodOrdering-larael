<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        $path=$request->path();
        if(($request->path()=="login" || $request->path()=="register") && $request->Session()->has('user'))
        {
       return redirect('/');
        }else if(($request->path()!="login" && !Session()->get('user')) && ($request->path()!="register" && !Session()->get('user'))){
            return redirect('/login');
          }
        return $next($request);
    }
}
