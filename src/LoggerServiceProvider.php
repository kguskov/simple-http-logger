<?php


namespace Guskov\Logger;


use Guskov\Logger\Http\Middleware\RequestLoggerMiddleware;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;


class LoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('log', RequestLoggerMiddleware::class);

        $this->publishes([]);
    }
}