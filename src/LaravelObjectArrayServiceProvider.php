<?php

namespace VGleb\ObjectArray;

use Illuminate\Support\ServiceProvider;

class LaravelObjectArrayServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register ()
    {
        $this->registerObjectArray();
    }

    /**
     * Register the cookie service binding
     *
     * @return void
     */
    private function registerObjectArray ()
    {
        $this->app->bind(
            'VGleb\ObjectArray\ObjectArray'
        );
    }

}