<?php

namespace App\Services;

use App\Models\TeamStanding;

class TeamStandingServiceImpl implements TeamStandingService
{

    public function getTeamStandings(): \Illuminate\Database\Eloquent\Collection
    {
        return TeamStanding::query()
                           ->orderBy('points', 'desc')
                           ->get();
    }
}