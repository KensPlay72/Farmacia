<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class usuarios extends Migration
{
    public function up()
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->id('IdUsuario');
            $table->string('Contraseña', 100);
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();

            // Definir la clave externa
            $table->foreign('IdUsuario')->references('IdEmpleado')->on('empleados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
