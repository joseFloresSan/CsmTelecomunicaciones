<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Reportes;
use Illuminate\Support\Facades\DB;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos  = Producto::all();
        return view('producto.index')->with('productos', $productos);
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
        $productos = new Producto();
        $productos->codigo = $request->get('codigo');
        $productos->nombre = $request->get('nombre');
        $productos->costoPorOrden = $request->get('costopororden');
        $productos->costoDeMantenimiento = $request->get('costodemantenimiento');
        $productos->unidadesAnuales = $request->get('unidadesanuales');
        $productos->unidadesMensuales = $request->get('unidadesmensuales');
        $productos->stockTeorico = $request->get('stock');
        $productos->stockReal = 0;
        $productos->precio = $request->get('precio');

        $productos->save();

        $reportes = new Reportes();
        $reportes->id_producto = $productos->id_producto;
        $reportes->inventarioPromedio = $reportes->promedioInventario($productos->unidadesAnuales, $productos->unidadesMensuales);
        $reportes->costoConservacion = $reportes->calculateCostoConservacion($productos->costoDeMantenimiento, $productos->precio, $reportes->inventarioPromedio);
        $reportes->costoPedido = $reportes->calculateCostoPedido($productos->costoPorOrden, $productos->unidadesAnuales, $reportes->inventarioPromedio);
        $reportes->indiceExactitud = 0;
        $reportes->save();
        
        return redirect('/productos');


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
        $producto  = Producto::find($id);
        return view('producto.edit')->with('producto', $producto);
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
        $producto  = Producto::find($id);
        $producto->codigo = $request->get('codigo');
        $producto->nombre = $request->get('nombre');
        $producto->costopororden = $request->get('costopororden');
        $producto->costodemantenimiento = $request->get('costodemantenimiento');
        $producto->unidadesanuales = $request->get('unidadesanuales');
        $producto->unidadesmensuales = $request->get('unidadesmensuales');
        $producto->stockTeorico = $request->get('stock');
        $producto->precio = $request->get('precio');

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
        $producto  = Producto::find($id);
        $producto->delete($id);


        return redirect('/productos');
    }
}
