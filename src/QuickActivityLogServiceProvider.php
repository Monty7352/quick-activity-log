<?php

namespace TestVendor\QuickActivityLog;

use Illuminate\Support\ServiceProvider;

class QuickActivityLogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
