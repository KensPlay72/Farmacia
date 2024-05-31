<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class historialventas extends Migration
{
    public function up()
    {
        Schema::create('HistorialVentas', function (Blueprint $table) {
            $table->id('IdVenta');
            $table->unsignedBigInteger('CodigoProducto');
            $table->integer('Cantidad')->nullable(false);
            $table->decimal('PrecioU', 10, 2)->nullable(false);
            $table->decimal('Subtotal', 10, 2)->nullable(false);
            $table->decimal('Impuesto', 10, 2)->nullable(false);
            $table->decimal('Total', 10, 2)->nullable(false);
            $table->unsignedBigInteger('IdFactura')->nullable();
            $table->timestamp('FechaVenta')->useCurrent();
            $table->unsignedBigInteger('IdEmpleado');
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();

            // Definir las claves foráneas
            $table->foreign('CodigoProducto')->references('CodigoProducto')->on('productos');
            $table->foreign('IdFactura')->references('IdFactura')->on('facturas');
            $table->foreign('IdEmpleado')->references('IdEmpleado')->on('empleados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_de_ventas');
    }
}
