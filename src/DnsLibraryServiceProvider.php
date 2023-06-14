<?php

namespace DnsLibrary;

use Illuminate\Support\ServiceProvider;

class DnsLibraryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(DnsLibraryInterface::class, DnsLibrary::class);
    }

    public function boot()
    {
        // Optional: If you need to publish any configuration files
        $this->publishes([
            __DIR__.'/path/to/config/dns-library.php' => config_path('dns-library.php'),
        ], 'config');
    }
}
