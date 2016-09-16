<?php
/**
 * Created by PhpStorm.
 * User: SRZAI
 * Date: 16.09.16
 * Time: 20:26
 */

namespace sweetmaerd\example;

use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider {

    public function boot(){

        require_once app_path().'/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/Views', 'example');

    }

    public function register()

    {

        $this->app['example'] = $this->app->share(function(){

            return new Example;

        });

    }

}