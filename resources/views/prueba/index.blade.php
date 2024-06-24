@extends('plantillas.cuerpo')

@section('titulo')
   Inicio
@endsection

@section('contenido')
<h1>Listado general de pruebas</h1>
<a href="{{route('prueba.crear')}}">Crear prueba</a>
<ul>
   @foreach ($datos as $dato)
   <li>
      <a href="{{route('prueba.mostrar', $dato->id)}}">{{$dato->nombre}}</a>
   </li>
   @endforeach
</ul>
@endsection