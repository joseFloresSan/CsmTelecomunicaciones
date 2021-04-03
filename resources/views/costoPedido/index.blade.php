@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Costo de Pedido</h1>
@stop

@section('content')

<table id="costodeconservacions"class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>            
            <th scope="col">Costo Fijo por Orden</th>
            <th scope="col">Unidades Anuales</th>
            <th scope="col">Inventario Promedio</th>
            <th scope="col">CTO</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($costosPedido as $dataCostoPedidos)
            <tr>
                <td>{{$dataCostoPedidos->id_producto}} </td>
                <td>{{$dataCostoPedidos->created_at}} </td>
                <td>{{$dataCostoPedidos->codigo}} </td>
                <td>{{$dataCostoPedidos->nombre}} </td>                
                <td>{{$dataCostoPedidos->costoPorOrden}} </td>
                <td>{{$dataCostoPedidos->unidadesAnuales}} </td>
                <td>{{$dataCostoPedidos->inventarioPromedio}} </td>                
                <td>{{$dataCostoPedidos->costoPedido}} </td>
                <td>
                    <form action="{{route ('costodeconservacions.destroy',$dataCostoPedidos->id_producto)}}" method="POST">
                    
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
<script>
$(document).ready(function() {
    $('#costodeconservacions').DataTable();
} );
</script>
@stop