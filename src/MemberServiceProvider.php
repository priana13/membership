<?php

namespace Priana\Membership;

use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings or services
    }

    public function boot()
    {


        // Publish configs, migrations, or assets
        $this->publishes([
            __DIR__ . '/../config/lara-member.php' => config_path('lara-member.php'),
            __DIR__. '/../models/Group.php' => "app/Models/Group.php",
            __DIR__. '/../models/Membership.php' => "app/Models/Membership.php",

        ], 'memberhsip');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mbs');
    }
}
