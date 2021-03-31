@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Inventario de Productos</h1>
@stop

@section('content')
<a href="productos/create" class="btn btn-primary mb-4">Crear Producto</a>

<table id="productos"class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">CostoPorOrden</th>
            <th scope="col">CostoDeMantenimiento</th>
            <th scope="col">UnidadesAnuales</th>
            <th scope="col">UnidadesMensuales</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}} </td>
                <td>{{$producto->codigo}} </td>
                <td>{{$producto->nombre}} </td>
                <td>{{$producto->costopororden}} </td>
                <td>{{$producto->costodemantenimiento}} </td>
                <td>{{$producto->unidadesanuales}} </td>
                <td>{{$producto->unidadesmensuales}} </td>
                <td>{{$producto->stock}} </td>
                <td>{{$producto->precio}} </td>
                <td>
                    <form action="{{route ('productos.destroy',$producto->id)}}" method="POST">
                    <a  href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>

</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet"> 
@stop

@section('js')
    
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish_Mexico.json"></script>
<script>
$(document).ready(function() {
    $('#productos').DataTable();
} );
</script>
@stop