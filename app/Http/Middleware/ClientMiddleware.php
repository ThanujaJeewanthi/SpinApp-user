<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ClientMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {  if (!Auth::check()) {
        Auth::logout();
        return redirect('/login')->with('error', 'Please Login first!');
    }

    if (Auth::user()->role_id == 2) {
        return $next($request);
    }

    return redirect('/')->with('error', 'You are not authorized to access this page!');

         }
}
