<?php
use Illuminate\Support\Facades\Route;

Route::get('/caja', function () {
    return view('caja', ['title' => 'CAJA DE VENTAS']);
});

Route::get('/', function () {
    return view('welcome', ['title' => 'Bienvenido']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/productos', function () {
    return view('productos', ['title' => 'Productos']);
});

Route::get('/ventas', function () {
    return view('ventas', ['title' => 'Ventas']);
});

Route::get('/clientes', function () {
    return view('clientes', ['title' => 'Clientes']);
});

Route::get('/usuarios', function () {
    return view('usuarios', ['title' => 'Usuarios']);
});

Route::get('/proveedores', function () {
    return view('proveedores', ['title' => 'Proveedores']);
});

Route::get('/empleados', function () {
    return view('empleados', ['title' => 'Empleados']);
});