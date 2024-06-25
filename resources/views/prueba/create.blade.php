@extends('plantillas.cuerpo')

@section('titulo')
   Creacion
@endsection

@section('contenido')
   <form action="{{route('prueba.store')}}" method="POST">
      @csrf

      <label>Nombre: </label>
      <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
      @error('nombre')
         <br>
         <span>{{$message}}</span>
      @enderror
      <br>

      <label>Descripción: </label>
      <input type="text" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
      @error('descripcion')
         <br>
         <span>{{$message}}</span>
      @enderror
      <br>

      <button type="submit">Crear</button>
   </form>
@endsection