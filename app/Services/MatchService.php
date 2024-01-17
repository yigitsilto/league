<?php

namespace App\Services;

interface MatchService
{

    public function getMatches(): \Illuminate\Database\Eloquent\Collection;

}