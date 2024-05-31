<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class facturas extends Migration
{
    public function up()
    {
        Schema::create('Facturas', function (Blueprint $table) {
            $table->id('IdFactura');
            $table->decimal('Subtotal', 10, 2)->nullable(false);
            $table->decimal('Impuestos', 10, 2)->nullable(false);
            $table->decimal('Total', 10, 2)->nullable(false);
            $table->timestamp('FechaFactura')->useCurrent();
            $table->unsignedBigInteger('IdUsuario')->nullable();
            $table->unsignedBigInteger('IdCliente')->nullable();
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();

            // Definir la clave externa
            $table->foreign('IdUsuario')->references('IdUsuario')->on('Usuarios');
            $table->foreign('IdCliente')->references('IdCliente')->on('Clientes');

        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
