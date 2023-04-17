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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)
                ->comment('Nombre del producto');
            $table->string('amount_content', 60)
                ->comment('Cantidad de gramos del producto, ejemplo 500 mg');
            $table->double('discount', 4, 2)
                ->default(0)
                ->comment('Solo si aplica, un pequeño decuento al producto, ejemplo 0.2 para representar el 20%');
            $table->double('cost', 12, 2)
                ->default(0)
                ->comment('Costo del producto');
            $table->string('active_substance', 40)
                ->comment('Sustancia activa del producto, ejemplo: Ibuprofeno');
            $table->string('description', 80)
                ->nullable()
                ->comment('Describe brevemente el producto');
            $table->string('location', 30)
                ->nullable()
                ->comment('De donde proviene el producto, ejemplo: Francia');
            $table->double('cost_per_unite', 12, 2)
                ->default(0)
                ->comment('solo si aplica, costo por unidad de venta');
            $table->string('barcode', 14)
                ->comment('Codigo de barras del producto');
            $table->enum('status', array('A', 'U'))
                ->default('A')
                ->comment('Estatus para saber si el registro esta activo en el sistema');
            // Llaves foraneas
            $table->unsignedBigInteger('buy_unite')
                ->comment('Referencia hacia la unidad de compra del producto')
                ->nullable();
            $table->unsignedBigInteger('sel_unite')
                ->comment('Referencia hacia la unidad de venta del producto')
                ->nullable();
            $table->unsignedBigInteger('category')
                ->comment('Referencia hacia la categoria del producto')
                ->nullable();
            $table->unsignedBigInteger('presentation')
                ->comment('Referencia hacia la presentacion del producto')
                ->nullable();

            $table->foreign('buy_unite', 'fk_products_buy_unites')
                ->references('id')
                ->on('buy_unites')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('sel_unite', 'fk_products_sell_unites')
                ->references('id')
                ->on('sell_unites')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('category', 'fk_products_categories')
                ->references('id')
                ->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('presentation', 'fk_products_presentations')
                ->references('id')
                ->on('presentations')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
