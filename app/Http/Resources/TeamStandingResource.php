<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TeamStandingResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'club' => $this->club,
            'played' => $this->played,
            'won' => $this->won,
            'drawn' => $this->drawn,
            'lost' => $this->lost,
            'points' => $this->points,
        ];
    }
}
