<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <style>
   .active{
       color:green
    }
   .error{
       color:red
   }
    </style>
</head>
<body>
    <header>
    <?php
     function activeMenu($url){
        return request()->is($url)?"active":"";
     }

    ?>
    <h1>{{ request()->is('/')?"estas en home":"no home" }}</h1>
    <nav>
        <a  class='{{ activeMenu("/")}}'
            href="{{route('home')}}">Inicio</a>
        <a  class='{{ activeMenu("saludo/*")}}'
            href="{{route('saludo','Danielita')}}">Saludo</a>
        <a  class='{{ activeMenu("contacto")}}'
            href="{{ route('contacto')}}">Contactos</a>
    </nav>
    </header>
    @yield('contenido')
    <footer>
    <label for=""> pabel</label>
    </footer>
</body>
</html>
