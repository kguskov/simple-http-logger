<?php


namespace Guskov\Logger\Http\Middleware;


use Guskov\Logger\Services\Helpers\RequestLoggerHelper;
use Closure;
use Illuminate\Http\Request;

class RequestLoggerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        RequestLoggerHelper::addlog();

        return $next($request);
    }
}