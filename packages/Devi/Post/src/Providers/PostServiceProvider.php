<?php

namespace Devi\Post\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('user', \Devi\Admin\Http\Middleware\Bouncer::class);

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'post');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}