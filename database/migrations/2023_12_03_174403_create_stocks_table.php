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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->index("product_id");
            $table->index("store_id");
            $table->float("quantity");
            $table->timestamps();

            $table->foreign("product_id")
                ->references("_id")
                ->on("products")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign("store_id")
                ->references("_id")
                ->on("stores")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
