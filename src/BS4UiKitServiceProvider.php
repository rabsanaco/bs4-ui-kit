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

        $this->publishes([
            __DIR__.'/assets' => public_path('assets/rabsanaco-bs4-ui-kit'),
        ], 'rabsanaco-bs4-ui-kit-assets');

        $this->publishes([
            __DIR__.'/config/rabsanaco-bs4-ui-kit.php' => config_path('rabsanaco-bs4-ui-kit.php'),
        ], 'rabsanaco-bs4-ui-kit-configs');
    }

    public function register(){
        $this->app->bind("Rabsanaco\Contracts\UI\Kit", "Rabsanaco\BS4UiKit\BS4Kit");
    }
}
