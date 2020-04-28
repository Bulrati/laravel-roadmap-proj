<?php
//TODO
//bind ValidationRules as a singleton
//Resolve with DI or app()

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('validationRules', 'App\Services\ValidationRules');
    }

}
