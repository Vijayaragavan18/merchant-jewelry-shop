<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cart;
use Illuminate\Support\ServiceProvider;

class wishProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

        $this->app->singleton("Cart", function () {
            return new Cart;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
