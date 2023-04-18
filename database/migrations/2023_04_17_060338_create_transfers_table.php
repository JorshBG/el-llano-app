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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->enum('state', array('Cancelado','Parcial','Rechazado','En proceso','Completo','Pendiente'));
            $table->dateTime('delivery_date');
            $table->unsignedBigInteger('user_sender_id');
            $table->unsignedBigInteger('user_receiver_id');
            $table->unsignedBigInteger('store_sender_id');
            $table->unsignedBigInteger('store_receiver_id');
            $table->timestamps();
            // Llaves foraneas
            $table->foreign('user_sender_id', 'fk_transfers_user_sender')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
            $table->foreign('user_receiver_id', 'fk_transfers_user_receiver')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');
            $table->foreign('store_sender_id', 'fk_transfers_store_sender')
                ->references('id')
                ->on('stores')
                ->onUpdate('cascade');
            $table->foreign('store_receiver_id', 'fk_transfers_store_receiver')
                ->references('id')
                ->on('stores')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
