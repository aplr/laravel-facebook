<?php 

namespace Aplr\LaravelFacebook;

use Facebook\Facebook;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {
    
    protected $defer = true;
    
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'facebook');
        
        $this->registerFacebookClient();
    }
    
    public function boot()
    {
        $this->publishes([
            $this->configPath() => config_path('facebook.php')
        ]);
    }
    
    protected function registerFacebookClient()
    {
        $this->app->singleton(Facebook::class, function($app) {
            return $this->makeFacebookClient($app['config']['facebook']);
        });
    }
    
    protected function makeFacebookClient($config)
    {
        return new Facebook([
            'app_id' => $config['app_id'],
            'app_secret' => $config['app_secret'],
            'default_graph_version' => $config['graph_version'],
        ]);
    }
    
    protected function configPath()
    {
        return __DIR__ . '/../config/facebook.php';
    }
    
    public function provides()
    {
        return [Facebook::class];
    }
    
}