<?php

namespace App\Providers;


use App\Services\FixtureService;
use App\Services\FixtureServiceImpl;
use App\Services\MatchService;
use App\Services\MatchServiceImpl;
use App\Services\SimulationService;
use App\Services\SimulationServiceImpl;
use App\Services\TeamStandingService;
use App\Services\TeamStandingServiceImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TeamStandingService::class,TeamStandingServiceImpl::class);
        $this->app->bind(FixtureService::class,FixtureServiceImpl::class);
        $this->app->bind(MatchService::class,MatchServiceImpl::class);
        $this->app->bind(SimulationService::class,SimulationServiceImpl::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
