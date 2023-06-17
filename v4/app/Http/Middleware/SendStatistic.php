<?php

namespace App\Http\Middleware;

use App\Models\Statistic;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SendStatistic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Statistic::create([
            'page' => url()->current(),
            'ip_adress' => $_SERVER['REMOTE_ADDR'],
            'host_name' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
            'browser_name' => $_SERVER['HTTP_USER_AGENT']
        ]);

        return $next($request);
    }
}
