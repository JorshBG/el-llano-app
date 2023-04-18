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
        Schema::create('consumptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')
                ->nullable()
                ->comment('Referencia hacia el paciente');
            $table->unsignedBigInteger('user_id')
                ->nullable()
                ->comment('Referencia hacia el usuario');
            $table->unsignedBigInteger('invoice')
                ->comment('Folio que recibe el ticket');
            $table->timestamps();

            // Llaves foraneas
            $table->foreign('patient_id', 'fk_consumption_patients')
                ->references('id')
                ->on('patients')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('user_id', 'fk_consumption_users')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumptions');
    }
};
