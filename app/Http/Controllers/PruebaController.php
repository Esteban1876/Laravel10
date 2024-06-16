<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
   public function index() {
      return view('prueba.index');
   }

   public function create($elemento) {
      return view('prueba.create', ['elemento' => $elemento]);
   }

   public function show() {
      return view('prueba.show');  
   }
}
