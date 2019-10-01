<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:30
 */
namespace Rabsanaco\BS4UiKit;


use Illuminate\Support\ServiceProvider;

class BS4UiKitServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/Blades', 'rabsanaco-bs4-ui-kit');

        $this->publishes([
            __DIR__.'/Blades' => resource_path('views/vendor/rabsanaco-bs4-ui-kit')
        ], 'blades');
    }

    public function register(){
        $this->bind("Rabsanaco\Contracts\Kit", "Rabsanaco\BS4UiKit\BS4Kit");
    }
}
