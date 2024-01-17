<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamStandingResource;
use App\Services\TeamStandingService;

class TeamStandingController extends Controller
{

    public function __construct(private readonly TeamStandingService $teamStandingService)
    {
    }

    public function index()
    {

        return TeamStandingResource::collection($this->teamStandingService->getTeamStandings());
    }
}
