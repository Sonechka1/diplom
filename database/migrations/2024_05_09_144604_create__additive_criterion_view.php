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
        DB::statement("CREATE VIEW Additive_criterion AS
                    SELECT DISTINCT orders.employee_id,
                           COALESCE(Normalization_total_amount.total_amount, 0) + COALESCE(Normalization_years_worked.years_worked, 0) +
                           COALESCE(Normalization_frequency.frequency, 0) + COALESCE(Normalization_number_completed.number_of_completed, 0) +
                           COALESCE(Normalization_number_uncompleted.number_of_uncompleted, 0) AS Additive_criterion
                    FROM orders
                    LEFT JOIN Normalization_number_uncompleted ON orders.employee_id = Normalization_number_uncompleted.employee_id
                    LEFT JOIN Normalization_total_amount ON orders.employee_id = Normalization_total_amount.employee_id
                    LEFT JOIN Normalization_years_worked ON orders.employee_id = Normalization_years_worked.employee_id
                    LEFT JOIN Normalization_number_completed ON orders.employee_id = Normalization_number_completed.employee_id
                    LEFT JOIN Normalization_frequency ON orders.employee_id = Normalization_frequency.employee_id;
                    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_additive_criterion_view');
    }
};
