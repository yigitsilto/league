<?php

namespace App\Http\Controllers;

use App\Http\Resources\FixtureResource;
use App\Http\Resources\MatchesResource;
use App\Services\FixtureService;
use App\Services\MatchService;

class MatchesController extends Controller
{

    public function __construct(private readonly MatchService $matchService)
    {
    }

    public function index()
    {
        return MatchesResource::collection($this->matchService->getMatches());
    }
}
