<?php

namespace DnsLibrary\Providers;

use Illuminate\Support\ServiceProvider;
use DnsLibrary\DnsLibrary;

class DnsLibraryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('dnslibrary', function ($app) {
            return new DnsLibrary();
        });
    }
}
