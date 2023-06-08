<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
// use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\MuridMiddleware;
use Symfony\Component\HttpFoundation\Response;

class GuruMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'gurubk') {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
