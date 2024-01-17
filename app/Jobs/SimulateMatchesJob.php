<?php

namespace App\Jobs;

use App\Services\SimulationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SimulateMatchesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private SimulationService $simulationService;
    /**
     * Create a new job instance.
     */
    public function __construct(SimulationService $simulationService)
    {
        $this->simulationService = $simulationService;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->simulationService->simulateAllMatches();
    }
}
