<?php

namespace App\Services;

interface TeamStandingService
{

    public function getTeamStandings(): \Illuminate\Database\Eloquent\Collection;

}