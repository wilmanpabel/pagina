@extends('plantilla')

@section('titulo')
Contactos
@stop

@section('contenido')
<h1>Contacto</h1>
<form action="contacto" method='POST'>
<p>
<label for="">nombre</label>
<input type="text" name='nombre' value="{{ old('nombre') }}">
{!! $errors->first('nombre','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Email</label>
<input type="email" name='email' value="{{ old('email') }}">
{!! $errors->first('email','<span class=error>:message </span>')!!}
</p>
<p>
<label for="">Mesaje</label>
<textarea id="" name="mensaje" cols="30" rows="10">{{ old('mensaje')}}</textarea>
{!! $errors->first('mensaje','<span class=error>:message </span>')!!}
</p>
    <input type="submit" value="Enviar">
</form>
@stop
