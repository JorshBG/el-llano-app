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
        Schema::create('purchase_order_has_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_order_id');
            $table->unsignedBigInteger('product_id');
            $table->double('amount', 12, 2);
            $table->timestamps();
            // Llave forenas
            $table->foreign('purchase_order_id', 'fk_purchase_order_has_products_purchase_order')
                ->references('id')
                ->on('purchase_orders')
                ->onUpdate('cascade');
            $table->foreign('product_id', 'fk_purchase_order_has_products_product')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_has_products');
    }
};
