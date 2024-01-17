<?php

namespace Database\Seeders;

use App\Models\Fixture;
use Illuminate\Database\Seeder;

class FixtureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create fixtures for matches with 2 matches per team (home and away)
        $teams = \App\Models\Team::query()
                                 ->get();

        $weeks = 1;
        foreach ($teams as $homeTeam) {
            foreach ($teams as $awayTeam) {
                if ($homeTeam->id !== $awayTeam->id) {
                    Fixture::query()
                           ->updateOrCreate([
                                                'home_team_id' => $homeTeam->id,
                                                'away_team_id' => $awayTeam->id,
                                            ], [
                                                'week' => $weeks
                                            ]);
                }
            }
            $weeks++;

        }
    }
}
