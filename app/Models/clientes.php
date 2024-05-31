<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $table = 'clientes';

    // Especifica el nombre de la clave primaria si no es 'id'
    protected $primaryKey = 'IdCliente';

    // Si la clave primaria no es de tipo entero autoincremental, añade esta propiedad
    public $incrementing = true;

    // Indica si el modelo debe usar marcas de tiempo (created_at, updated_at)
    public $timestamps = false;

    // Los atributos que se pueden asignar de forma masiva.
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Direccion',
        'Email',
        'Telefono',
        'FechaCreacion',
        'FechaActualizacion',
    ];

    // Los atributos que deben ser ocultos para arrays y JSON
    protected $hidden = [
        // Agrega aquí los campos que deseas ocultar (si es necesario)
    ];
}