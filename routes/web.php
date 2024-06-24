<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// prueba con uso de controlador y grupo
Route::controller(PruebaController::class)->group(function (){
   Route::get('/prueba', 'index', function () {})->name('prueba.index');
   Route::get('/prueba/mostrar/{id}', 'show', function () {})->name('prueba.mostrar');
   Route::get('/prueba/create/{elemento}', 'create', function () {})->name('prueba.crear');
});


// prueba sin uso de controlador
Route::get('prueba/{variable?}/{nombre?}/{apodo?}', function ($variable = null, $nombre = null, $apodo = null) {
   if (!empty($variable) && !empty($nombre) && !empty($apodo)) {
      return 'Ruta de prueba con variable: ' . $variable . ', nombre ' . $nombre . ' y apodo ' . $apodo;
   } else if (!empty($variable) && !empty($nombre) && empty($apodo)) {
      return 'Ruta de prueba con variable: ' . $variable . ' y nombre ' . $nombre;
   } else if (!empty($variable) && empty($nombre) && empty($apodo)) {
      return 'Ruta de prueba con variable: ' . $variable;
   } else {
      return 'Ruta de prueba sin parámetros';
   }
});