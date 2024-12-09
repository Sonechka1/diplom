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
        DB::statement("CREATE VIEW Normalization_frequency AS
                    SELECT odd.employee_id AS employee_id, ((CAST(odd.Average_orders AS DECIMAL(12, 4)) / MAX(max_values.max_frequency)) * 0.5) AS frequency
                    FROM max_values
                    CROSS JOIN order_date_difference odd
                    GROUP BY odd.employee_id;
                    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalization_frequency_view');
    }
};
