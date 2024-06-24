@extends('plantillas.cuerpo')

@section('titulo')
   Creacion
@endsection

@section('contenido')
   <form action="{{route('prueba.store')}}" method="POST">
      @csrf
      <label>Nombre: </label>
      <input type="text" name="nombre" id="nombre">
      <br>
      <label>Descripción: </label>
      <input type="text" name="descripcion" id="descripcion">
      <br>
      <button type="submit">Crear</button>
   </form>
@endsection