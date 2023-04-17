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
            $table->unsignedBigInteger('bill');
            $table->unsignedBigInteger('pay');
            // Llaves foraneas
            $table->foreign('bill', 'fk_pay_has_bills_bill')
                ->references('id')
                ->on('bills')
                ->onUpdate('cascade');
            $table->foreign('pay', 'fk_pay_has_bills_pay')
                ->references('id')
                ->on('pays')
                ->onUpdate('cascade');

            $table->primary(array('bill', 'pay'), 'pk_pay_has_bills');
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
