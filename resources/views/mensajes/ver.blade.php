@extends('plantilla')
@section('contenido')
    <h1>Mensaje</h1>
    <p> enviado por {{ $mensaje->nombre }} - {{ $mensaje->email}}</p>
    <p> mensaje {{ $mensaje->mensaje }}  </p>
@endsection
