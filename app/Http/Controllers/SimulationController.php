<?php

namespace App\Http\Controllers;

use App\Http\Resources\MatchesResource;
use App\Jobs\SimulateMatchesJob;
use App\Services\MatchService;
use App\Services\SimulationService;

class SimulationController extends Controller
{

    public function __construct(private readonly SimulationService $service)
    {
    }

    public function simulate()
    {
        SimulateMatchesJob::dispatch($this->service);
        return true;
    }
}
