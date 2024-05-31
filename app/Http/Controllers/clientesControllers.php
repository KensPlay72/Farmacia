<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class clientesControllers extends Controller
{
    public function index()
    {
        // Obtiene todos los registros de la tabla Clientes
        $clientes = clientes::all();

        // Retorna los registros en formato JSON
        return response()->json($clientes);
    }
}