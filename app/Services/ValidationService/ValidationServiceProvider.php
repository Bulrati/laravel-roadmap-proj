<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('validationRules', 'App\Services\ValidationRules');
    }

}
