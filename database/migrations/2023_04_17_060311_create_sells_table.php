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
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pay_method_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            // Llaves foraneas
            $table->foreign('pay_method_id', 'fk_sells_pay_method')
                ->references('id')
                ->on('pay_methods')
                ->onUpdate('cascade');
            $table->foreign('user_id', 'fk_sells_user')
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
        Schema::dropIfExists('sells');
    }
};
