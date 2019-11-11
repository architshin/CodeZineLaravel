<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecordIPAddress2
{
	public function handle(Request $request, Closure $next, $importance)
	{
		$ipAddress = $request->ip();
		$path = $request->path();
		print("<p>IPアドレスは".$ipAddress."でパスは".$path."で重要度は".$importance."</p>");
		return $next($request);
	}
}
