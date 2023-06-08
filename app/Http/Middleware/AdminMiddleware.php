<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\MuridMiddleware;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);

            return redirect('/');
        }

        abort(403, 'Unauthorized');
    }
}