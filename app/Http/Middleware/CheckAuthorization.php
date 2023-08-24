<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\AuthToken;

class CheckAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $header_auth = $request->header('Authorization') ?? '';

        if (!$header_auth) {
            $request->is_auth = false;
            $request->token_data = null;

            return $next($request);
        }

        $token_str = explode(' ', $header_auth)[1];
        $request->is_auth = (bool) $token_str;
        $request->token_data = AuthToken::decode($token_str);
        
        return $next($request);
    }
}
