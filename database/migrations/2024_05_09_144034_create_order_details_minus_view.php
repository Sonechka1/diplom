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
        DB::statement("CREATE VIEW order_details_minus AS
            SELECT
                u.id AS employee_id,
                NULLIF(o.date_completion, 0) AS order_date,
                NULLIF(ROW_NUMBER() OVER (PARTITION BY o.employee_id ORDER BY o.date_completion), 0)-1 AS order_number
            FROM users u
            LEFT JOIN orders o ON o.employee_id = u.id
            WHERE u.role_id = 2
            ORDER BY employee_id, order_date;
            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details_minus_view');
    }
};
