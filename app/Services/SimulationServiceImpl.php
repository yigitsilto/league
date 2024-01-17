<?php

namespace App\Services;

use App\Jobs\SimulateMatchesJob;
use App\Models\Fixture;
use App\Models\MatchModel;

class SimulationServiceImpl implements SimulationService
{

    public function simulateAllMatches(): bool
    {
        MatchModel::query()->truncate();
        // Tüm maçları fixture tablosundan çek ve simule et
        $fixtures = Fixture::query()
                           ->with('homeTeam', 'awayTeam')
                           ->get();

        foreach ($fixtures as $fixture) {
            $this->simulateMatch($fixture->homeTeam->overall, $fixture->awayTeam->overall, $fixture);
        }

        return true;

    }

    private function simulateMatch($homeTeamOverall, $awayTeamOverall, Fixture $fixture)
    {
        $awayTeamOverall += rand(0, 20); //away team advantage

        // Her iki takımın overall puanını karşılaştır
        if ($homeTeamOverall > $awayTeamOverall) {
            // home team
            MatchModel::query()
                      ->create([
                                   'home_team_id' => $fixture->home_team_id,
                                   'away_team_id' => $fixture->away_team_id,
                                   'home_team_score' => rand(3, 5),
                                   'away_team_score' => rand(0, 2),
                                   'winner_id' => $fixture->home_team_id,
                                   'draw' => 0,
                               ]);
        } elseif ($homeTeamOverall < $awayTeamOverall) {
            MatchModel::query()
                      ->create([
                                   'home_team_id' => $fixture->home_team_id,
                                   'away_team_id' => $fixture->away_team_id,
                                   'home_team_score' => rand(0, 2),
                                   'away_team_score' => rand(3, 5),
                                   'winner_id' => $fixture->away_team_id,
                                   'draw' => 0
                               ]);
        } else {
            $rand = rand(0, 4);
            // draw
            MatchModel::query()
                      ->create([
                                   'home_team_id' => $fixture->home_team_id,
                                   'away_team_id' => $fixture->away_team_id,
                                   'home_team_score' => $rand,
                                   'away_team_score' => $rand,
                                   'winner_id' => null,
                                   'draw' => 1
                               ]);
        }
    }


}
