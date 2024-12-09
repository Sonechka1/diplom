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
        DB::statement("CREATE VIEW max_values AS
            SELECT
                MAX(co.completed_orders_count) AS max_completed_orders,
                MAX(uo.uncompleted_orders_count) AS max_unfulfilled_orders,
                MAX(ee.years_worked) AS max_years_worked,
                MAX(odd.average_orders) AS max_frequency,
                MAX(os.total_orders_cost) AS max_total_amount_last_month
            FROM
                completed_orders co
            CROSS JOIN uncompleted_orders uo CROSS JOIN employee_experience ee CROSS JOIN order_date_difference odd CROSS JOIN orders_summary os;

            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('max_values_view');
    }
};
