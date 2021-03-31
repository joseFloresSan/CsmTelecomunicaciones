@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Costo de conservacion</h1>
@stop

@section('content')

<table id="costodeconservacions"class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>            
            <th scope="col">CostoDeMantenimiento</th>
            <th scope="col">UnidadesAnuales</th>
            <th scope="col">UnidadesMensuales</th>            
            <th scope="col">Precio</th>
            <th scope="col">InventarioPromedio</th>
            <th scope="col">CTM</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($costodeconservacions as $costodeconservacion)
            <tr>
                <td>{{$costodeconservacion->id}} </td>
                <td>{{$costodeconservacion->fecha}} </td>
                <td>{{$costodeconservacion->codigo}} </td>
                <td>{{$costodeconservacion->nombre}} </td>                
                <td>{{$costodeconservacion->costodemantenimiento}} </td>
                <td>{{$costodeconservacion->unidadesanuales}} </td>
                <td>{{$costodeconservacion->unidadesmensuales}} </td>
                <td>{{$costodeconservacion->precio}} </td>
                <td>{{$costodeconservacion->inventariopromedio}} </td>                
                <td>{{$costodeconservacion->ctm}} </td>
                <td>
                    <form action="{{route ('costodeconservacions.destroy',$costodeconservacion->id)}}" method="POST">
                    
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