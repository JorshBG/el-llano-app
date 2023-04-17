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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            // Datos del paciente
            $table->string('name', 40)->comment('Nombre del paciente');
            $table->string('last_name', 40)->comment('Apellidos del paciente');
            $table->string('address', 100)->comment('Direccion del paciente');
            $table->string('cellphone', 10)->comment('Numero de telefono');
            $table->string('email', 100)->nullable()->comment('Correo electronico del usuario');
            $table->enum('gender', array('H','M','X'))->comment('Genero del paciente, X si el usuario se identifica con otro genero');
            $table->string('born_place', 60)->nullable()->comment('Lugar de nacimiento');
            $table->string('secure_number', 11)->comment('Numero de seguro social');
            $table->string('blood_type', 5)->comment('Tipo de sangre asosiada');
            $table->enum('civil_status', array(
                'Soltero',
                'Casado',
                'Viudo',
                'Divorciado',
                'Unión Libre'
            ))->nullable()->comment('El estado civil del paciente');
            // Datos del acompañante
            $table->string('name_companion', 100)->nullable()->comment('Nombre del acompañante del paciente');
            $table->string('address_companion', 100)->nullable()->comment('Direccion del acompañante del paciente');
            $table->string('cellphone_companion', 10)->nullable()->comment('Numero de telefono del acompañante del paciente');
            $table->string('relationship_companion', 30)->nullable()->comment('Parentesco del acompañante del paciente');
            // Datos del responsable
            $table->string('name_responsible',100)->nullable()->comment('Nombre del responable del paciente');
            $table->string('address_responsible', 100)->nullable()->comment('Direccion del responable del paciente');
            $table->string('cellphone_responsible', 10)->nullable()->comment('Numero del responable del paciente');
            $table->string('relationship_responsible', 30)->nullable()->comment('Parentesco del responable del paciente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
