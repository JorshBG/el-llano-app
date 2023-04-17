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
        Schema::create('buy_unites', function (Blueprint $table) {
            $table->id();

            $table->string('name', 60)
                ->unique()
                ->comment('Cual es la unidad de compra del producto, ejemplo: caja');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_unite');
    }
};
