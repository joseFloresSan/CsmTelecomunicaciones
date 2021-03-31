@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    
@stop

@section('content')
<h2>Editar Producto</h2>
<form action="/productos/{{$producto->id}}"method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class ="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$producto->codigo}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">CostoPorOrden</label>
        <input id="costopororden" name="costopororden" type="number" class="form-control" value="{{$producto->costopororden}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">CostoDeMantenimiento</label>
        <input id="costodemantenimiento" name="costodemantenimiento" type="number" class="form-control" value="{{$producto->costodemantenimiento}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">UnidadesAnuales</label>
        <input id="unidadesanuales" name="unidadesanuales" type="number" class="form-control" value="{{$producto->unidadesanuales}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">UnidadesMensuales</label>
        <input id="unidadesmensuales" name="unidadesmensuales" type="number" class="form-control" value="{{$producto->unidadesmensuales}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">Stock</label>
        <input id="stock" name="stock" type="number" class="form-control" value="{{$producto->stock}}">      
    </div>
    <div class="mb-3">
        <label for="" class ="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00"class="form-control" value="{{$producto->precio}}">      
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="9">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop