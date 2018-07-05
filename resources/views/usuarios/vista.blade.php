@extends('plantilla')
@section('contenido')
 <table class="table">
     <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
     </thead>
     <tbody>
     @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id}}</td>
            <td>{{ $usuario->name}}</td>
            <td>{{ $usuario->email}}</td>
            <td>{{ $usuario->rol}}</td>
            <td></td>
        </tr>
        @endforeach
     </tbody>

 </table>

@endsection
