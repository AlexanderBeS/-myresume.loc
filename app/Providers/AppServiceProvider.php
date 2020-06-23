<?php

namespace App\Providers;

use App\Repositories\ResumeRepository;
use App\Repositories\ResumeRepositoryInterface;
use App\Services\ResumeService;
use App\Services\ResumeServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ResumeServiceInterface::class, ResumeService::class);
        $this->app->bind(ResumeRepositoryInterface::class, ResumeRepository::class);
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
