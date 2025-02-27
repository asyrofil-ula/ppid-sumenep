<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Console\View\Components\Alert;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() && ($request->role == 'admin' || $request->role == 'pembantu')) {
            return redirect()->route('home'); 
        }
        return $next($request);
    }
}
