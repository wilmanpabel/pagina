@extends('plantilla')
@section('contenido')
  <h1>{{$usuario->name}}</h1>
    <table class="table">
      <tr>
        <td>Nombre:</td>
        <td>{{$usuario->name}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>{{$usuario->email}}</td>
      </tr>
        <tr>
        <td>Rol</td>
        <td>
          @foreach($usuario->roles as $rol)
             {{$rol->nombre_mostrado  }}
          @endforeach
        </td>
      </tr>
    </table>
  @can('edit',$usuario)
  <a href="{{ route('usuarios.edit',$usuario->id)}}" class="btn btn-info"> Editar</a>
  @endcan
    @can('destroy',$usuario)
  <form style='display:inline' action="{{ route('usuarios.destroy',$usuario->id)}}" method='POST'>
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <input type="submit" class='btn btn-danger ' value='Eliminar'>
               </form>
  @endcan
    @endsection
