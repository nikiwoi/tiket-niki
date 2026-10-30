<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (! class_exists(\App\Mail\RegistrationEmail::class, false) && is_file(app_path('Mail/registration-email.php'))) {
            require_once app_path('Mail/registration-email.php');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
