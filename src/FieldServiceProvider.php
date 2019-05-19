<?php

namespace Ninesixtymv\NovaDhivehiField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

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
            Nova::script('nova-dhivehi-field', __DIR__ . '/../dist/js/jtk.js');
            Nova::script('nova-dhivehi-field', __DIR__ . '/../dist/js/field.js');
            Nova::style('nova-dhivehi-field', __DIR__ . '/../dist/css/field.css');
            // Nova::script('dhivehi-text-field', __DIR__ . '/../dist/js/jtk.js');
            // Nova::script('dhivehi-textarea-field', __DIR__ . '/../dist/js/field.js');
            // Nova::style('dhivehi-textarea-field', __DIR__ . '/../dist/css/field.css');
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
