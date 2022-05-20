<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyIsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if(!auth()->user()->isAdmin())
        {
            return redirect()->back()->with('error', 'Your are not authorized to visit this page!');
        }
        return $next($request);
    }
}
