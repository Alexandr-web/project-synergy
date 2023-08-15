<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\AuthToken;

class RoleMustBe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $token = AuthToken::get();
        $token_data = AuthToken::decode($token);

        if ($token_data['role'] !== $role) {
            return abort(404);
        }

        return $next($request);
    }
}
