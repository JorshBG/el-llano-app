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
        Schema::create('pay_has_bills', function (Blueprint $table) {
            $table->unsignedBigInteger('bill_id');
            $table->unsignedBigInteger('pay_id');
            // Llaves foraneas
            $table->foreign('bill_id', 'fk_pay_has_bills_bill')
                ->references('id')
                ->on('bills')
                ->onUpdate('cascade');
            $table->foreign('pay_id', 'fk_pay_has_bills_pay')
                ->references('id')
                ->on('pays')
                ->onUpdate('cascade');

            $table->primary(array('bill_id', 'pay_id'), 'pk_pay_has_bills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_has_bills');
    }
};
