<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth_token = $request->header('authorization');
        // verifico se è presente un token di autorizzazione
        if(empty($auth_token)) {
            return response()->json([
                'success' => false,
                'error' => 'Api token mancante'
            ]);
        }
        // estraggo il token dall'header
        $api_token = substr($auth_token, 7);
        // verifico la correttezza dell'api_token

        if($api_token !== "123456789") {
            return response()->json([
                'success' => false,
                'error' => 'Api token errato'
            ]);
        }
        return $next($request);
    }
}
