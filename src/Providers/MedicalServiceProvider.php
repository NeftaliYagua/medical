<?php

namespace LaravelSchema\Medical;

use Illuminate\Support\ServiceProvider;

class MedicalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/medical.php' => config_path('medical.php'),
        ]);
    }
    public function register()
    {
        
    }
}