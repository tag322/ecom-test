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
        Schema::create('baskets_payload', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basket_id'); 
                $table->foreign('basket_id')
                    ->references('id')
                    ->on('baskets')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('product_id'); //item from product variant table, to be precise
                $table->foreign('product_id')
                    ->references('id')
                    ->on('product_variants')
                    ->onDelete('cascade');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->unique(['basket_id','product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baskets_payload');
    }
};
