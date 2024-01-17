<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \Illuminate\Support\Facades\DB::statement('CREATE VIEW team_standings AS
SELECT
    t.name AS Club,
    COUNT(m.id) AS Played,
    SUM(CASE WHEN m.winner_id = t.id THEN 1 ELSE 0 END) AS Won,
    SUM(m.draw) AS Drawn,
    COUNT(m.id) - SUM(CASE WHEN m.winner_id = t.id THEN 1 ELSE 0 END) - SUM(m.draw) AS Lost,
    COALESCE(SUM(CASE WHEN m.winner_id = t.id THEN 3 ELSE m.draw END), 0) AS Points
FROM
    teams t
        LEFT JOIN
    matches m ON t.id IN (m.home_team_id, m.away_team_id)
GROUP BY
    t.id, t.name
ORDER BY
    Points ASC;

');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       \Illuminate\Support\Facades\DB::statement('DROP VIEW team_standings');
    }
};
