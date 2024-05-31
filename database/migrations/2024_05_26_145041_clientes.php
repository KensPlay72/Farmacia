<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class clientes extends Migration
{
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->id('IdCliente');
            $table->string('Nombre', 100)->nullable(false);
            $table->string('Apellido', 100)->nullable(false);
            $table->string('Telefono', 15)->nullable(true);
            $table->string('Email', 100)->nullable(true);
            $table->text('Direccion')->nullable(true);
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Proveedores');
    }
}