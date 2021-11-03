<?php

namespace App\Providers;

use App\Contract\Eapi\EapiContract;
use App\Contract\NewMailContract;
use App\Repositories\Eapi\EapiRepository;
use App\Repositories\NewMailRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EapiContract::class, EapiRepository::class);
        $this->app->bind(NewMailContract::class, NewMailRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
