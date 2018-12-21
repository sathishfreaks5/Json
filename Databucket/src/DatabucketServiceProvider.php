<?php namespace Json\Databucket;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class DatabucketServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    { 
          $this->registerDatabucket();
          $this->registerDatabucketManager();

       /*  \App::bind('databucket', function() {
            return new Databucket;
        }); */

    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/databucket.php');
        // Check if the application is a Laravel OR Lumen instance to properly merge the configuration file.
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('databucket.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('databucket');
        }
        $this->mergeConfigFrom($source, 'databucket');
    }


     /**
     * register Data Bucket Manager.
     */
    protected function registerDatabucketManager()
    {
        $config = $this->app['config'];
       /*  \App::bind('databucket', function() {
            return new Databucket;
        });*/

        $this->app->singleton('databucket.manager', function () use ($config) {
            return new JsonQueriable($config->get('databucket.json.storage_path'));
        });

        $this->app->alias('databucket.manager', JsonQueriable::class);
    }

    /**
     * Register Talk class.
     */
    protected function registerDatabucket()
    {
        $config = $this->app['config'];
        $this->app->bind('databucket', function () use ($config) {
            $path = $config->get('databucket.json.storage_path');
            $storagePath = $path == '' ? null : $path;

            return new Databucket($storagePath);
        });

        $this->app->alias('databucket', Databucket::class);
    }
    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jsonq',
            'jsonq.manager',
        ];
    }
}
