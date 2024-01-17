<?php

namespace App\Services;

interface FixtureService
{

    public function getFixture(): \Illuminate\Database\Eloquent\Collection;

}