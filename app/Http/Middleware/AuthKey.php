<?php

namespace App\Http\Middleware;

use Closure;
use Monolog\Handler\IFTTTHandler;

class AuthKey
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
        $ApiKey = $request->header('ApiKey');

        if ($ApiKey != '3d_api20209373545849_grace_myanmar')
        {
            return response()->json(['message'=>'ApiKey did not found']);
        }

        return $next($request);
    }
}
