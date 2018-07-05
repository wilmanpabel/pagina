<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <?php
     function activeMenu($url){
        return request()->is($url)?"active":"";
     }
    ?>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">nav</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ activeMenu('/')}}">
        <a class="nav-link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ activeMenu("saludo/*")}}">
        <a class="nav-link" href="{{route('saludo','Danielita')}}">Saludo</a>
      </li>

      <li class="nav-item {{ activeMenu("mensajes/create*")}}">
        <a class="nav-link" href="{{ route('mensajes.create')}}">Contacto</a>
      </li>

            @if(auth()->check())
            <li class="nav-item {{ activeMenu("mensajes*")}}">
                <a  class='nav-link' href="{{ route('mensajes.index')}}">Mensajes</a>
            </li>
            @if(auth()->user()->hasRoles('admin'))
                <li class="nav-item {{ activeMenu("usuarios")}}">
                    <a  class='nav-link' href="{{ route('usuarios.index')}}">Usuarios</a>
                </li>
            @endif
          <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">Cerrar Sesion</a>
            </div>
          </li> 
            @else
        <li class="nav-item {{ activeMenu("login")}}">
            <a  class='nav-link' href="/login">Login</a>
        </li>
            @endif


    </ul>
  </div>
</nav>
    </div>


<div class="container">
    @yield('contenido')
<br>
<hr>
    <footer>
        <label for=""> pabel</label>
    </footer>
</div>
</body>
<script src='/js/app.js'></script >

</html>
