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
            <td>
            @foreach($usuario->roles as $rol)
                {{ $rol->nombre_mostrado}},
            @endforeach
            </td>
            <td><a class='btn btn-info btn-sm' href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
               <form style='display:inline' action="{{ route('usuarios.destroy',$usuario->id)}}" method='POST'>
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <input type="submit" class='btn btn-danger btn-sm' value='Eliminar'>
               </form>
        </td>
        </tr>
        @endforeach
     </tbody>

 </table>

@endsection
