<?php

namespace App\Http\Controllers;

use App\Http\Resources\FixtureResource;
use App\Http\Resources\TeamStandingResource;
use App\Services\FixtureService;
use App\Services\TeamStandingService;

class FixturesController extends Controller
{

    public function __construct(private readonly FixtureService $fixtureService)
    {
    }

    public function index()
    {
        return FixtureResource::collection($this->fixtureService->getFixture());
    }
}
