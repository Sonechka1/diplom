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
        DB::statement("CREATE VIEW Normalization_years_worked AS
                    SELECT ee.employee_id AS employee_id, ((CAST(ee.years_worked AS DECIMAL(12, 4)) / MAX(max_values.max_years_worked)) * 0.8) AS years_worked
                    FROM max_values
                    CROSS JOIN employee_experience ee
                    GROUP BY ee.employee_id
                    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalization_years_worked_view');
    }
};
