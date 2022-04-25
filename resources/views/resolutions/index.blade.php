@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-dark mb-3">
                <div id="card-header" class="card-header text-white text-center" style="background-color: #222831;">Resoluciones
                    <a id="btn-crear" href="/resolutions/create" class="btn btn-primary">CREAR</a>
                </div>
                    <div class="card-body bg-white ">
                        <table id="resolutions-table" class="table text-center  table-hover table-white table-bordered  table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Resolucion</th>
                                    <th>Relacion de aspecto</th>
                                    <th>Fecha de creacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->aspect_ratio}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <form action="{{ route('resolutions.destroy',$item->id) }}" method="POST">
                                        <a href="/resolutions/{{$item->id}}/edit" class="btn btn-info">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
@stop

@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#resolutions-table').DataTable({
                "language": {
                    "search":       "Buscar",
                    "lengthMenu":   "Mostrar _MENU_ registros por página",
                    "info":         "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                                    "previous": "Anterior",
                                    "next":     "Siguiente",
                                    "first":    "Primero",
                                    "last":     "Último"
                    }
                },
                responsive: true
            });
        } );
    </script>
@stop
