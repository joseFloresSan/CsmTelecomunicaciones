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
            <th scope="col">Stock Teorico</th>
            <th scope="col">Stock Real</th>
            <th scope="col">Indice de Exactitud</th>
            
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($indiceExactitud as $dataIndiceExactitud)
            <tr>
                <td>{{$dataIndiceExactitud->id_producto}} </td>
                <td>{{$dataIndiceExactitud->created_at}} </td>
                <td>{{$dataIndiceExactitud->codigo}} </td>
                <td>{{$dataIndiceExactitud->nombre}} </td>                
                <td>{{$dataIndiceExactitud->stockTeorico}} </td>
                <td>{{$dataIndiceExactitud->stockReal}} </td>
                <td>{{$dataIndiceExactitud->indiceExactitud}}</td>       
                <td>
                    <!-- <form action="{{route ('costodeconservacions.destroy',$dataIndiceExactitud->id_producto)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form> -->
                    <a href="" data-target="#modal-edit-{{$dataIndiceExactitud->id_producto}}" data-toggle="modal">
                        <button class="btn btn-success">
                            <i class="fas fa-edit"></i>
                            Stock Real
                        </button>
                    </a>
                </td>
               
            </tr>

            @include('indiceExactitud.modalStockReal')
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