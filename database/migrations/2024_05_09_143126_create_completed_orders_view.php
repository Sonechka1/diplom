<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("CREATE VIEW completed_orders AS
                SELECT e.id AS employee_id, COALESCE(COUNT(o.id), 0) as completed_orders_count
                FROM users e
                LEFT JOIN orders o ON e.id = o.employee_id
                    AND o.status_id IN (SELECT id FROM statuses WHERE status_name = 'Выполнен')
                WHERE e.role_id = (SELECT id FROM roles WHERE role = 'Employee')
                GROUP BY e.id;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_orders_view');
    }
};
