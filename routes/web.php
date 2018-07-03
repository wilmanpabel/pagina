<?php

Route::get('/',['as'=>'home','uses'=>'PagesController@home']);

Route::get('/saludo/{nombre?}',['as'=>'saludo', 'uses'=>'PagesController@saludo']);

Route::post('/contacto','PagesController@mensaje');

Route::get('/contacto',['as'=>'contacto','uses'=>'PagesController@contact' ]);

//token error is 419
