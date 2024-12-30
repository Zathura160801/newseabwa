<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductSubscription;
use App\Observers\ProductSubscriptionObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ProductSubscription::observe(ProductSubscriptionObserver::class);
    }
}
