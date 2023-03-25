<?php

namespace Test\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
//        echo '<br /><br /><br /><br />';
//        echo __DIR__.'/Views';
        $this->loadViewsFrom(__DIR__.'/Views', 'test');
        include __DIR__.'/routes.php';
    }
}
