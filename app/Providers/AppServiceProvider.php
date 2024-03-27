<?php

namespace App\Providers;

use App\Interfaces\TemplateCertificateInterfaces;
use App\Repositories\TemplateCertificateRepositories;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TemplateCertificateInterfaces::class, TemplateCertificateRepositories::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
