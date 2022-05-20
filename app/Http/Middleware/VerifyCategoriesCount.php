<?php

namespace App\Http\Middleware;

use App\Models\Category;
use Closure;
use Illuminate\Http\Request;

class VerifyCategoriesCount
{

    public function handle(Request $request, Closure $next)
    {
        if(Category::all()->count() === 0){
            return redirect()->back()->with('error', 'You have to add categories first !');
        }
        return $next($request);
    }
}
