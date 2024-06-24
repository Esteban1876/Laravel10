@extends('plantillas.cuerpo')

@section('titulo')
   Mostrar
@endsection
<a href="{{route('prueba.index')}}">Volver al listado</a>
@section('contenido')
   <h2>Nombre: {{$datos->nombre}}</h2>
   <p>Descripción: {{$datos->descripcion}}</p>
@endsection