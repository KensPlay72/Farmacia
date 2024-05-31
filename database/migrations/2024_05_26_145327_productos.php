<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class productos extends Migration
{
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id('CodigoProducto');
            $table->string('NombreProducto', 100)->nullable(false);
            $table->integer('Cantidad')->nullable(false);
            $table->decimal('PrecioCompra', 10, 2)->nullable(false);
            $table->decimal('PrecioVenta', 10, 2)->nullable(false);
            $table->date('FechaVencimiento')->nullable();
            $table->integer('CantidadMinima')->nullable(false);
            $table->text('Descripcion')->nullable();
            $table->string('Ubicacion', 100)->nullable();
            $table->string('Marca', 50)->nullable();
            $table->unsignedBigInteger('IdProveedor');
            $table->timestamps();
            $table->enum('Estado', ['activo', 'inactivo'])->default('activo');
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaActualizacion')->useCurrent()->useCurrentOnUpdate();
            // Definir la clave externa
            $table->foreign('IdProveedor')->references('IdProveedor')->on('proveedores');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
