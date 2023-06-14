<?php

namespace DnsLibrary;

use Illuminate\Support\ServiceProvider;

class DnsLibraryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(DnsLibraryInterface::class, DnsLibrary::class);
    }
}