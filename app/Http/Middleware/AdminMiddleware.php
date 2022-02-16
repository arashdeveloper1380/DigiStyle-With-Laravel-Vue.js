<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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

            if ($request->user()->roule == '0'  && $request->user()->status == '1') {
           return redirect('/user');
        }
        return $next($request);
    }
}
