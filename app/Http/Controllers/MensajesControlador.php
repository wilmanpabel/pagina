<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Mensaje;
use App\Http\Requests\CrearMensajeRequest ;

class MensajesControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(){
        $this->middleware('auth',['except'=>['create','store']]);
    }
    public function index()
    {
        //$mensajes=DB::table('mensajes')->get();
        $mensajes=Mensaje::all();
        return view('mensajes.index',compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensajes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearMensajeRequest  $request)
    {
        Mensaje::create($request->all());

        //  DB::table('mensajes')->insert([
        //      'nombre'=>$request->nombre,
        //      'email'=>$request->email,
        //      'mensaje'=>$request->mensaje
        //  ]);
        //   $mensaje=new Mensaje;
        //   $mensaje->nombre=$request->nombre;
        //   $mensaje->email=$request->email;
        //   $mensaje->mensaje=$request->mensaje;
        //   $mensaje->save();

        //return redirect()->route('mensajes.index');

        return back()
            ->with('info','tu mensaje a sido enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //$mensaje=DB::table('mensajes')->where('id',$id)->first();
        $mensaje=Mensaje::findOrFail($id);
        return view('mensajes.ver',compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$mensaje=DB::table('mensajes')->where('id',$id)->first();
        $mensaje=Mensaje::findOrFail($id);
        return view('mensajes.editar',compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearMensajeRequest   $request, $id)
    {
        // DB::table('mensajes')->where('id',$id)->update([
        //     'nombre'=>$request->nombre,
        //     'email'=>$request->email,
        //     'mensaje'=>$request->mensaje
        // ]);
        Mensaje::findOrfail($id)->update($request->all());
        //$mensaje->update($request->all());
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('mensajes')->where('id',$id)->delete();
        Mensaje::findOrFail($id)->delete();
        return redirect()->route('mensajes.index');
    }

}
