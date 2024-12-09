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
        DB::statement("CREATE VIEW order_date_difference AS
                SELECT od.employee_id,
                       COALESCE(AVG(CAST(DATEDIFF(odm.order_date, od.order_date) AS DECIMAL(12, 4))), 0) AS Average_orders
                FROM order_details AS od
                LEFT JOIN order_details_minus AS odm ON od.employee_id = odm.employee_id AND od.order_number = odm.order_number
                GROUP BY od.employee_id;
                ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_date_difference_view');
    }
};
