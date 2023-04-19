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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)
                ->comment('Nombre del usuario del sistema');
            $table->string('last_name', 60)
                ->nullable()
                ->comment('Apellido del usuario');
            $table->string('email', 100)
                ->unique()
                ->comment('Correo electronico del usuario del sistema');
            $table->timestamp('email_verified_at')
                ->nullable();
            $table->string('password')
                ->comment('Contraseña del usuario, consulta con un administrador para conocer mas detalles de este campo');
            $table->unsignedBigInteger('role_id')
                ->nullable()
                ->comment('Referencia hacia el rol que tiene el usuario del sistema');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id', 'fk_user_roles')
                ->references('id')
                ->on('roles')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
