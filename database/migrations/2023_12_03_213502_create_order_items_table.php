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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->index("order_id");
            $table->index("product_id");
            $table->float("cost");
            $table->float("price");
            $table->float("discount");
            $table->timestamps();

            $table->foreign("order_id")
                ->references("_id")
                ->on("orders")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign("product_id")
                ->references("_id")
                ->on("products")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
