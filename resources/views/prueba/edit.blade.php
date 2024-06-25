@extends('plantillas.cuerpo')

@section('titulo')
   Edición
@endsection

@section('contenido')
   <form action="{{route('prueba.update')}}" method="POST">
      @csrf
      @method('PUT')
      <label>Nombre: </label>
      <input type="text" name="nombre" id="nombre" value="{{old('nombre', $datos->nombre)}}">
      @error('nombre')
         <span>{{$message}}</span>
      @enderror
      <br>

      <label>Descripción: </label>
      <input type="text" name="descripcion" id="descripcion" value="{{old('descripcion', $datos->descripcion)}}">
      @error('descripcion')
         <span>{{$message}}</span>
      @enderror
      <br>
      <button type="submit">Editar</button>
   </form>
@endsection