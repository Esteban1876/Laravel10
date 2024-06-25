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
      $request->validate([
         'nombre' => 'required',
         'descripcion' => 'required'
      ]);

      $Prueba = new Prueba();
      $Prueba->nombre = $request->nombre;
      $Prueba->descripcion = $request->descripcion;
      $Prueba->save();

      return redirect()->route('prueba.mostrar', $Prueba->id);
   }

   public function edit($id) {
      $prueba = new Prueba();
      $datos = $prueba::find($id);
      return view('prueba.edit', ['datos' => $datos]);
   }

   public function update(Request $request){
      $request->validate([
         'nombre' => 'required',
         'descripcion' => 'required'
      ]);
      
      $prueba = new Prueba();
      $prueba->nombre = $request->nombre;
      $prueba->descripcion = $request->descripcion;
      $prueba->save();
      
      return redirect()->route('prueba.mostrar', $prueba->id);
   }

   public function show($id) {
      $Prueba = new Prueba();
      $datos = $Prueba::find($id);
      return view('prueba.show', ['datos' => $datos]);  
   }
}
