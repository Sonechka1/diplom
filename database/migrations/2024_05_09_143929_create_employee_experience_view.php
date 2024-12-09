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
        DB::statement("CREATE VIEW employee_experience AS
            SELECT id AS employee_id, DATEDIFF(CURDATE(), date) / 365 AS years_worked
            FROM users
            WHERE role_id = 2
            ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_experience_view');
    }
};
