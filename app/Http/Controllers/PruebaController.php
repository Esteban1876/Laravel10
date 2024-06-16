<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index() {
        return 'Prueba de la función index del grupo prueba';
    }

    public function create($elemento) {
        return 'Se creará el elemento: ' . $elemento;
    }

    public function show() {
        return 'Se mostrarán todos los elementos de prueba';
    }
}
