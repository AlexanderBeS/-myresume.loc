<?php

namespace App\Providers;

use App\Http\Repositories\ResumeRepository;
use App\Http\Repositories\ResumeRepositoryInterface;
use App\Http\Services\ResumeService;
use App\Http\Services\ResumeServiceInterface;
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
