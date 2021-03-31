<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos  =Producto::all();
        return view('producto.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos =new Producto();
        $productos->codigo=$request->get('codigo');
        $productos->nombre=$request->get('nombre');
        $productos->costopororden=$request->get('costopororden');
        $productos->costodemantenimiento=$request->get('costodemantenimiento');
        $productos->unidadesanuales=$request->get('unidadesanuales');
        $productos->unidadesmensuales=$request->get('unidadesmensuales');
        $productos->stock=$request->get('stock');
        $productos->precio=$request->get('precio');

        $productos->save();

        return redirect('/productos');

        $id = DB::table('costodeconservacions')->get('id')
        ->max('id');

        $query = DB::table('costodeconservacions')->store([
            'codigo' => $request->input('codigo'),
            'nombre'=>$request->input('nombre'),        
            'nombre'=>$request->input('costodemantenimiento'),
            'nombre'=>$request->input('unidadesanuales'),
            'nombre'=>$request->input('unidadesmensuales'),
            'nombre'=>$request->input('precio'),
            
            
        ]);

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
        $producto  =Producto::find($id);
        return view('producto.edit')->with('producto',$producto);
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
        $producto  =Producto::find($id);
        $producto->codigo=$request->get('codigo');
        $producto->nombre=$request->get('nombre');
        $producto->costopororden=$request->get('costopororden');
        $producto->costodemantenimiento=$request->get('costodemantenimiento');
        $producto->unidadesanuales=$request->get('unidadesanuales');
        $producto->unidadesmensuales=$request->get('unidadesmensuales');
        $producto->stock=$request->get('stock');
        $producto->precio=$request->get('precio');

        $producto->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto  =Producto::find($id);
        $producto->delete($id);

        
        return redirect('/productos');
    }
}
