<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW Normalized_results AS
                            SELECT
                                employee_id,
                                MAX(Result) AS Result,
                                ROW_NUMBER() OVER (ORDER BY MAX(Result) DESC) AS Rating
                            FROM (
                                SELECT
                                    o.employee_id,
                                    a.Additive_criterion / m.maxNormalize AS Result
                                FROM
                                    orders o
                                INNER JOIN additive_criterion a ON o.employee_id = a.employee_id
                                INNER JOIN maxnormalize m
                            ) AS RankedResults
                            GROUP BY
                                employee_id
                            ORDER BY
                                employee_id DESC;
                            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalized_results_view');
    }
};
