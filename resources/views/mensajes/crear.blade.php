@extends('plantilla')
@section('titulo')
    Contactos
@stop
@section('contenido')
<h1>Contacto</h1>
@if(session()->has('info'))
    <h3>Tu mensaje a sido enviado</h3>
@else
<form action="{{ route('mensajes.store')}}" method='POST'>
    {!! csrf_field() !!}
<p>
<label for="">nombre</label>
<input class="form-control" type="text" name='nombre' value="{{ old('nombre') }}">
{!! $errors->first('nombre','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Email</label>
<input class="form-control" type="email" name='email' value="{{ old('email') }}">
{!! $errors->first('email','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Mesaje</label>
<textarea class="form-control" id="" name="mensaje" cols="30" rows="10">{{ old('mensaje')}}</textarea>
{!! $errors->first('mensaje','<span class=error>:message </span>')!!}
</p>
    <input class='btn btn-primary' type="submit" value="Enviar">
</form>
@endif

@stop
