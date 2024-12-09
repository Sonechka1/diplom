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
        DB::statement("CREATE VIEW Normalization_total_amount AS SELECT
                os.employee_id,
                CAST(os.total_orders_cost AS DEC(12, 4)) / max_values.max_total_amount_last_month AS total_amount
            FROM
                max_values
            CROSS JOIN orders_summary os");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalization_total_amount_view');
    }
};
