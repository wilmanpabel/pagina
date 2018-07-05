@extends('plantilla')
@section('titulo')
@section('contenido')
<table class='table'>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Mensaje</th>
        <th>Acciones</th>
    </thead>
    <tbody>
@foreach($mensajes as $mensaje)
    <tr>
        <td>{{ $mensaje->id}}</td>
        <td><a href="{{ route('mensajes.show',$mensaje->id) }}">{{ $mensaje->nombre}}</a></td>
        <td>{{ $mensaje->email}}</td>
        <td>{{ $mensaje->mensaje}}</td>
        <td><a class='btn btn-info btn-sm' href="{{ route('mensajes.edit',$mensaje->id) }}">Editar</a>
       <form style='display:inline' action="{{ route('mensajes.destroy',$mensaje->id)}}" method='POST'>
        {!! method_field('DELETE') !!}
        {!! csrf_field() !!}
        <input type="submit" class='btn btn-danger btn-sm' value='Eliminar'>
       </form>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
@stop
