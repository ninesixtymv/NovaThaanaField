<?php

namespace Ninesixtymv\NovaThaanaField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-thaana-field-jtk', __DIR__ . '/../dist/js/jtk.js');
            Nova::script('nova-thaana-field', __DIR__ . '/../dist/js/field.js');
            Nova::style('nova-thaana-field', __DIR__ . '/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
