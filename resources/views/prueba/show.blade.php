@extends('plantillas.cuerpo')

@section('titulo')
   Mostrar
@endsection

@section('contenido')
   <h2>Información de la prueba</h2>
   <p>Nombre: {{$datos->nombre}}</p>
   <p>Descripción: {{$datos->descripcion}}</p>
   <p>Aprobada: {{$datos->aprobada == true ? 'Aprobada' : 'Denegada'}}</p>
@endsection