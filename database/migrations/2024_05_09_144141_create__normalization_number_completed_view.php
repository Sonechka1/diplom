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
        DB::statement("
                CREATE VIEW Normalization_number_completed AS
                SELECT
                    co.employee_id,
                    CAST(
                        co.completed_orders_count AS DEC(12, 4)
                    ) / max_values.max_completed_orders AS number_of_completed
                FROM
                    max_values
                CROSS JOIN completed_orders co
                ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalization_number_completed_view');
    }
};
