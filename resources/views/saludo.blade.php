   @extends('plantilla')

   @section('titulo')
   Saludo
   @stop

@section('contenido')
   <h1>Hora {{ $nombre }}</h1>
   <ul>
       @foreach($consolas as $con)
           <li>{{ $con }}</li>
       @endforeach
   </ul>
   @stop
