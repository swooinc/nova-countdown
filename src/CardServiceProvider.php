<?php

namespace Swooinc\NovaCountdown;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->routes();
        });

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-countdown', __DIR__.'/../dist/js/card.js');
            Nova::style('nova-countdown', __DIR__.'/../dist/css/card.css');
        });
    }
}
