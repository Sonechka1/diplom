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
        DB::statement("CREATE VIEW  maxnormalize AS
                     SELECT
                        SUM(
                            additive_criterion.Additive_criterion
                        ) AS maxNormalize
                    FROM
                        additive_criterion
                    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maxnormalize_view');
    }
};
