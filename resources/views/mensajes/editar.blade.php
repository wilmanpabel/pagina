@extends('plantilla')
@section('contenido')
<h2>Editar mensaje de {{ $mensaje->nombre }}</h2>
<form action="{{ route('mensajes.update',$mensaje->id)}}" method='POST'>
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
<p>
<label for="">nombre</label>
<input class='form-control' type="text" name='nombre' value="{{$mensaje->nombre }}">
{!! $errors->first('nombre','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Email</label>
<input class='form-control' type="email" name='email' value="{{ $mensaje->email }}">
{!! $errors->first('email','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Mesaje</label>
<textarea class='form-control' id="" name="mensaje" cols="30" rows="10">{{ $mensaje->mensaje}}</textarea>
{!! $errors->first('mensaje','<span class=error>:message </span>')!!}
</p>
    <input class='btn btn-info' type="submit" value="Enviar">
</form>
@endsection
