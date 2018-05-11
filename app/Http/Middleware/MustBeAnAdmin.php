<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAnAdmin
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
        // user login && admin
        if ($request->user() && $request->user()->isAdmin()) { //Auth::user()
            # code...
            return $next($request);
        }
        return redirect('/');
    }
}
