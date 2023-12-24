<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("customer_id");
            $table->float("total_amount");
            $table->float("discount")->default(0);
            $table->float("amount_paid");
            $table->float("amount_due")->default(0);
            $table->timestamps();

            $table->foreign("customer_id")
                ->references("id")
                ->on("customers")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign("order_id")
                ->references("id")
                ->on("customers")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
