<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_struktures', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')->constrained('orders');
            $table->string('fullName', 100);
            $table->string('phone', 11);
            $table->string('startPoint', 100);
            $table->string('endPoint', 100);
//            $table->foreignId('currentLocation_id', 100)->nullable()->constrained('delivery');
            $table->decimal('weight', 8, 2);
            $table->date('shippingDate');
            $table->date('arrivalDate');
            $table->decimal('distance', 8, 2);

            $table->date('date');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_struktures');
    }
};
