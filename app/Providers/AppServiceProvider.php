<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
       paginator::useBootstrap();
       \URL::forceScheme('https');
       $this->app['request']->server->set('HTTPS','on');
    }
       
}
