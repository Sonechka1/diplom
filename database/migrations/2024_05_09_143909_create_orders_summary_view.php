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
        DB::statement("CREATE VIEW orders_summary AS
            SELECT
                u.id AS employee_id,
                COALESCE(SUM(CASE WHEN o.date_completion >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH) THEN o.cost ELSE 0 END), 0) AS total_orders_cost
            FROM users u
            LEFT JOIN orders o ON u.id = o.employee_id
            WHERE u.role_id = (SELECT id FROM roles WHERE role = 'Employee')
            GROUP BY u.id;
            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_summary_view');
    }
};
