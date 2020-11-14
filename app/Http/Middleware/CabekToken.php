<?php

namespace App\Http\Middleware;

use Closure;

class CabekToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        if ($request->input('_token') != env('CABEK_TOKEN')) {

            return response()->json([
                'status' => 'unauthorized token',
                'code' => 401
            ]);
        }

        return $next($request);
    }
}
