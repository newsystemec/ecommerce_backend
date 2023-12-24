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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id");
            $table->float("total_amount");
            $table->float("discount")->nullable();
            $table->boolean("is_void")->default(false);
            $table->boolean("is_cancelled")->default(false);
            $table->timestamps();

            $table->foreign("customer_id")
                ->references("id")
                ->on("customers")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
