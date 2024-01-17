<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatchesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'home_team' => $this->homeTeam->name,
            'away_team' => $this->awayTeam->name,
            'home_team_score' => $this->home_team_score,
            'away_team_score' => $this->away_team_score,
            'winner' => $this->winner->name ?? null,
            'draw' => $this->draw,
            'week' => $this->week,
        ];
    }
}
