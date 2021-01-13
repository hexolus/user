<?php

namespace Hexolus\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/user.php', 'user'
        );

        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
        $this->loadTranslationsFrom(__DIR__ . "/../resources/lang", "user");
        $this->loadJsonTranslationsFrom(__DIR__ . "/../resources/lang");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", "user");
        // $this->loadViewComponentsAs("user", []);
    }

    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../config/user.php' => config_path('user.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/2014_10_13_000000_update_users_table_add_uuid_and_soft_delete.php' => database_path('migration/2014_10_13_000000_update_users_table_add_uuid_and_soft_delete.php'),
        ], 'migration');
    }

}