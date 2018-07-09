@extends('plantilla')
@section('contenido')
<h2>Editar</h2>
<form action="{{ route('usuarios.update',$usuario->id)}}" method='POST'>
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
<p>
<label for="">nombre</label>
<input class='form-control' type="text" name='name' value="{{$usuario->name }}">
{!! $errors->first('name','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Email</label>
<input class='form-control' type="email" name='email' value="{{ $usuario->email }}">
{!! $errors->first('email','<span class=error>:message </span>')!!}
</p>
<p>
    <input class='btn btn-info' type="submit" value="Enviar">
</form>
@endsection
