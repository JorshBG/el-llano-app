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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name', 60)
                ->comment('Nombre del cliente');

            $table->string('last_name', 20)
                ->nullable()
                ->comment('Apellidos del cliente');

            $table->string('email', 100)
                ->nullable()
                ->comment('Es el correo electronico del cliente');

            $table->enum('status', array('A', 'U'))
                ->default('A')
                ->comment('Este es el estado del cliente, si se encuentra activo en el sistema o no');

            $table->string('rfc', 13)
                ->unique()
                ->nullable()
                ->comment('Campo del registro federal de contribuyentes, solo sera requerido si el usuario quiere realizar facturaciones');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
