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
        // Package ki migration direct app me load ho jayegi
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}