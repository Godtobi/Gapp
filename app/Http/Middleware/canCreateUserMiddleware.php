<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class canCreateUserMiddleware
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
        if (auth()->user()->hasAnyRole(['admin','superAdmin','company'])){
            return $next($request);
        }
        return redirect()->back()->withErrors("You dont have permission to view the page");
    }
}
