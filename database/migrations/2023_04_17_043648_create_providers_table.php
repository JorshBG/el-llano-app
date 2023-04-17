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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)
                ->comment('Nombre completo del proveedor');
            $table->string('last_name', 40)
                ->nullable()
                ->comment('Apellidos del proveedor');
            $table->string('email', 100)
                ->comment('Este es el correo electronico del proveedor');
            $table->string('rfc', 13)
                ->comment('Registro federal de contribuyentes de proveedores');
            $table->string('cellphone', 10)
                ->nullable()
                ->comment('Numero de telefono del proveedor');
            $table->enum('status', array('A', 'U'))
                ->default('A')
                ->comment('Se refiere a si el proveedor esta activo en el sistema');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
