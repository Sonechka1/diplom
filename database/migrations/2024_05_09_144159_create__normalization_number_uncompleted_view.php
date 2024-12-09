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
        DB::statement("CREATE VIEW Normalization_number_uncompleted AS
            SELECT
                uo.employee_id,
                (CAST(
                    uo.uncompleted_orders_count AS DEC(12, 4)
                ) / max_values.max_unfulfilled_orders)  * -0.75 AS number_of_uncompleted
            FROM
                max_values
            CROSS JOIN uncompleted_orders uo
            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_normalization_number_uncompleted_view');
    }
};
