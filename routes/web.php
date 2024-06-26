<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// prueba con uso de controlador y grupo
Route::controller(PruebaController::class)->group(function (){
   Route::get('/prueba', 'index')->name('prueba.index');
   Route::get('/prueba/mostrar/{id}', 'show')->name('prueba.mostrar');
   Route::post('/prueba/create', 'store')->name('prueba.store');
   Route::get('/prueba/create/', 'create')->name('prueba.crear');
   Route::get('/prueba/{id}/edit', 'edit')->name('prueba.edit');
   Route::put('/prueba/update', 'update')->name('prueba.update');
   Route::delete('/prueba/delete/{id}', 'destroy')->name('prueba.destroy');   
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