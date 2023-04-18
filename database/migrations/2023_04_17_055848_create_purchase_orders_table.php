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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('purchase_date');
            $table->dateTime('delivery_date');
            $table->enum('pay_status', array('Sin pago', 'Pago parcial', 'Pagado'));
            $table->enum('status', array('A', 'U'));
            $table->enum('delivery_status', array('Sin entregar', 'Entrega parcial', 'Entregado'));
            $table->unsignedBigInteger('pay_method_id')
                ->nullable();
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // Llaves foraneas
            $table->foreign('pay_method_id', 'fk_purchase_order_pay_method')
                ->references('id')
                ->on('pay_methods')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->foreign('provider_id', 'fk_purchase_order_provider')
                ->references('id')
                ->on('providers')
                ->onUpdate('cascade');
            $table->foreign('user_id', 'fk_purchase_order_user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
