<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class empleados extends Migration
{
    public function up()
    {
        Schema::create('Empleados', function (Blueprint $table) {
            $table->id('IdEmpleado');
            $table->string('Nombre', 100)->nullable(false);
            $table->string('Apellido', 100)->nullable(false);
            $table->string('Direccion', 255)->nullable(true);
            $table->string('Correo', 100)->unique(true);
            $table->string('Telefono', 15)->nullable(true);
            $table->string('Cargo', 50)->nullable(false);
            $table->string('DNI', 13)->nullable(false);
            $table->date('FechaContratacion')->nullable();
            $table->enum('Estado', ['activo', 'inactivo'])->default('activo');
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
