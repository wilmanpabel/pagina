<?php
Route::get('/test',function(){
    $usuario=new App\User;
    $usuario->name='Danielita ';
    $usuario->email='wilmanpabel@gmail.com';
    $usuario->password=bcrypt('123');
    $usuario->rol_id=2;
    $usuario->save();
    //auth()->logout();
    return $usuario;

});
Route::get('roles',function(){
    return \App\Rol::with('usuario')->get();
});

Route::get('/',['as'=>'home','uses'=>'PagesController@home']);
Route::get('/saludo/{nombre?}',['as'=>'saludo', 'uses'=>'PagesController@saludo']);

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::get('logout','Auth\LoginController@logout');

Route::post('login','Auth\LoginController@login');

Route::resource('mensajes','MensajesControlador');
Route::resource('usuarios','UsuarioControlador');

//Route::get('/mensajes/crear',['as'=>'mensaje.crear','uses'=>'MensajesControlador@create' ]);
//token error is 419
//Route::post('/mensajes',['as'=>'mensaje.store','uses'=>'MensajesControlador@store' ]);
//Route::get('/mensajes',['as'=>'mensaje.index','uses'=>'MensajesControlador@index' ]);
//Route::get('/mensajes/{id}',['as'=>'mensaje.show','uses'=>'MensajesControlador@show' ]);
//Route::get('/mensajes/{id}/editar',['as'=>'mensaje.edit','uses'=>'MensajesControlador@edit' ]);
//Route::put('/mensajes/{id}',['as'=>'mensaje.update','uses'=>'MensajesControlador@update' ]);
//Route::delete('/mensajes/{id}',['as'=>'mensaje.destroy','uses'=>'MensajesControlador@destroy' ]);
