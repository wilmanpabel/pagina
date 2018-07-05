@extends('plantilla')
@section('contenido')
<h3>login</h3>
<form method="POST" action='/login' class='form-inline'>
    {!! csrf_field() !!}
    <input class="form-control" type="email" name="email" placeholder="Email">
    <input class="form-control" type="password" name="password" placeholder="Contraseña">
    <input type="submit" value="ingresar" class='btn btn-primary'>
</form>
@endsection
