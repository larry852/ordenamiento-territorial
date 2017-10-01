<?php

namespace App\Http\Middleware;

use Closure;

class Cors {
	public function handle($request, Closure $next)
	{
		if ($request->getMethod() == "OPTIONS") {
			return Response::make('OK', 200, $headers);
		}
		return $next($request)
		->header('Access-Control-Allow-Origin', '*')
		->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
	}
}