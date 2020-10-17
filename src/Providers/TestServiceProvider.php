<?php
    
namespace Kishan\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

    public function boot()
    {
        // Indicates route to load
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // Indicates blade file to load with name
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'test');
    }

    public function register()
    {
    }
}