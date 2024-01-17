<?php

namespace App\Services;

use App\Models\Fixture;

class FixtureServiceImpl implements FixtureService
{
    public function getFixture(): \Illuminate\Database\Eloquent\Collection
    {
        // TODO pagination and filtering can be added for the future
        return Fixture::query()
                      ->with([
                                 'homeTeam',
                                 'awayTeam'
                             ])
                      ->whereHas('homeTeam')
                      ->whereHas('awayTeam')
                      ->orderBy('week', 'asc')
                      ->get();
    }
}
