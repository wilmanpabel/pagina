<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function mensaje(Request $request){
        $this->validate($request,[
                'nombre'=>'required',
                'email'=>'email|required',
                'mensaje'=>'required|min:5'
        ]);

        return $request->all();
    }
}
