<?php

Route::get('/',['as'=>'home', function () {
    return view('welcome');
}]);

Route::get('/saludo/{nombre}',['as'=>'saludo', function ($nombre) {
    return view('saludo',compact('nombre'));
}]);

Route::get('/contacto',['as'=>'contacto', function () {
    return view('contactos');
}]);
