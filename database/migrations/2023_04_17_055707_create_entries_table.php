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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice')
                ->comment('Folio que recibe el ticket de entrada');
            $table->string('batch_name')
                ->comment('Nombre del lote que recibe la entrada');
            $table->integer('amount')
                ->comment('Cantidad de producto');
            $table->double('cost_per_product', 12, 2)
                ->comment('Costo por unidad de producto');
            $table->dateTime('manufacturing_date')
                ->comment('Fecha de fabricacion');
            $table->dateTime('purchase_date')
                ->comment('Fecha de compra');
            $table->dateTime('expiration_date')
                ->comment('Fecha de caducidad');
            $table->unsignedBigInteger('product_id')
                ->comment('Referencia al producto que entra');
            $table->unsignedBigInteger('store_id')
                ->comment('Referencia al almacen donde se da la entrada');
            // Llaves foraneas
            $table->foreign('product_id', 'fk_entry_products')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade');
            $table->foreign('store_id', 'fk_entry_stores')
                ->references('id')
                ->on('stores')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
