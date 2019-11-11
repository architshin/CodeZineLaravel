<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecordIPAddress
{
	public function handle(Request $request, Closure $next)
	{
		$ipAddress = $request->ip();
		$path = $request->path();
		print("<p>IPアドレスは".$ipAddress."でパスは".$path."</p>");
		return $next($request);
	}
}
