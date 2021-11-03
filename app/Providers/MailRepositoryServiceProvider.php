<?php

namespace App\Providers;

use App\Contract\MailContract;
use App\Repositories\MailRepository;
use Illuminate\Support\ServiceProvider;

class MailRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MailContract::class, MailRepository::class);
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
