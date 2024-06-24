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

   public function create($elemento) {
      return view('prueba.create', ['elemento' => $elemento]);
   }

   public function show($id) {
      $Prueba = new Prueba();
      $datos = $Prueba::find($id);
      return view('prueba.show', ['datos' => $datos]);  
   }
}
