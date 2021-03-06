<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        $this->app->bind('path.public', function() {
            return '/home2/orgondie/public_html';
        });
        */
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('vendor.pagination.bootstrap-4');
        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-');
    }
}
