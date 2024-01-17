<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('fixture_id');
            $table->integer('home_team_score')->default(0);
            $table->integer('away_team_score')->default(0);
            $table->integer('winner_id')->nullable();
            $table->integer('draw')->default(0);
            $table->timestamps();

            $table->foreign('fixture_id')->references('id')->on('fixtures');
            $table->foreign('winner_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
