<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, Authenticatable $user): Response
    {
        /** @phpstan-ignore-next-line */
        if ($user->isReader()) {
            abort(404);
        }

        return $next($request);
    }
}
