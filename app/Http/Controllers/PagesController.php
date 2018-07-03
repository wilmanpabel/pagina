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
        return view('home');
    }

    public function contact(){
        return view('contactos');
    }
    public function saludo($nombre){
        $consolas=["Play station 5" ,"xbox 3","Wii "];
        return view('saludo',compact('nombre','consolas'));
    }

    public function mensaje(CrearMensajeRequest $request){
        return $request->all();
    }
}
