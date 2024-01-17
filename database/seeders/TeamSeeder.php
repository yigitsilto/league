<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 4 teams city, arsenal, chelsea, manchester
        $teams = [
            [
                'name' => 'Manchester City',
                'overall' => 100
            ],
            [
                'name' => 'Arsenal',
                'overall' => 90
            ],
            [
                'name' => 'Chelsea',
                'overall' => 80
            ],
            [
                'name' => 'Manchester United',
                'overall' => 70
            ],
        ];

        foreach ($teams as $team) {
            \App\Models\Team::query()
                            ->updateOrCreate([
                                                 'name' => $team['name']
                                             ], [
                                                 'overall' => $team['overall']
                                             ]);
        }
    }
}
