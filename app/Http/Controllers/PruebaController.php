<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
   public function index() {
      $Prueba = new Prueba();
      $datos = $Prueba::all();
      return view('prueba.index', ['datos' => $datos]);
   }

   public function create() {
      return view('prueba.create');
   }

   public function store(Request $request) {
      $Prueba = new Prueba();
      $Prueba->nombre = $request->nombre;
      $Prueba->descripcion = $request->descripcion;
      $Prueba->save();

      return redirect()->route('prueba.mostrar', $Prueba->id);
   }

   public function show($id) {
      $Prueba = new Prueba();
      $datos = $Prueba::find($id);
      return view('prueba.show', ['datos' => $datos]);  
   }
}
