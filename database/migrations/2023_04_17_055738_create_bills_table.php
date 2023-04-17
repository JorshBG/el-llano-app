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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serie')
                ->comment('Serie a la que pertenece la cuenta');
            $table->string('sender', 13)
                ->comment('RFC de quien realiza la factura');
            $table->string('receiver', 13)
                ->comment('RFC de quien recibe la factura');
            $table->string('use', 100)
                ->comment('Uso fiscal de la factura');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
