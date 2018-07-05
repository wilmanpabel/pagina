<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CrearMensajeRequest;

class PagesController extends Controller
{
//    public function __construct(Request $request){
//        $this->request=$request;
//    }

    public function home(){
       //return response('contenido de la respuesta',201)
       //                ->header('x-token','fasdfasdf')
       //                ->cookie('X-COOKIE','fasdfsdffsdaf xd');
        return view('home');
    }

    public function saludo($nombre){
        $consolas=["Play station 5" ,"xbox 3","Wii "];
        return view('saludo',compact('nombre','consolas'));
    }

}
