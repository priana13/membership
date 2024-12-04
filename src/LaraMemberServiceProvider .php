<?php

namespace Priana\Membership;

use Illuminate\Support\ServiceProvider;

class LaraMemberServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings or services
    }

    public function boot()
    {

        \Log::info('LaraMemberServiceProvider booted!');


        // Publish configs, migrations, or assets
        $this->publishes([
            __DIR__ . '/../config/lara-member.php' => config_path('lara-member.php'),
        ], 'config');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
