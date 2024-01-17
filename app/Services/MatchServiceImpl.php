<?php

namespace App\Services;

use App\Models\Fixture;
use App\Models\MatchModel;

class MatchServiceImpl implements MatchService
{
    public function getMatches(): \Illuminate\Database\Eloquent\Collection
    {
        // TODO pagination and filtering can be added for the future
        return MatchModel::query()
                      ->with([
                                 'homeTeam',
                                 'awayTeam',
                                 'winner'
                             ])
                      ->whereHas('homeTeam')
                      ->whereHas('awayTeam')
                      ->orderBy('week', 'asc')
                      ->get();
    }
}
