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
        Schema::create('store_has_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product')
                ->comment('Referencia hacia el producto');
            $table->unsignedBigInteger('store')
                ->comment('Referencia hacia el almacen que contiene el producto');
            $table->integer('amount')
                ->comment('Cantidad de producto actualmente en el almacen');
            $table->integer('minimun_amount')
                ->comment('Cantidad minima de producto para el almacen');

            // Llaves foraneas
            $table->foreign('product', 'fk_store_has_products_products')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('store', 'fk_store_has_products_stores')
                ->references('id')
                ->on('stores')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_has_products');
    }
};
