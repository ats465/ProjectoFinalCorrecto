<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    }
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->Codigo =$request->get('Codigo');
        $articulos->Nombre =$request->get('Nombre');
        $articulos->Correo =$request->get('Correo');
        $articulos->Contrasena =$request->get('Contrasena');
        $articulos->Edad =$request->get('Edad');
        $articulos->Peso =$request->get('Peso');
        $articulos->Talla =$request->get('Talla');

        $articulos->save();

        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo= Articulo::find($id);

        $articulo->Codigo =$request->get('Codigo');
        $articulo->Nombre =$request->get('Nombre');
        $articulo->Correo =$request->get('Correo');
        $articulo->Contrasena =$request->get('Contrasena');
        $articulo->Edad =$request->get('Edad');
        $articulo->Peso =$request->get('Peso');
        $articulo->Talla =$request->get('Talla');

        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
