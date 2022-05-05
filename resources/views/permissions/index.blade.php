@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-dark mb-3">
    <div id="card-header" class="card-header text-white text-center">Permisos
        @can('crear-permiso')
        <form action="{{ route('users.create') }}" method="POST">
            <a type="submit" href="/permissions/create" class="btn btn-default btn-circle" data-bs-toggle="tooltip" title="Añadir permiso"><i class="fa fa-plus"></i></a>
        </form>
        @endcan
    </div>
        <div class="card-body bg-white">
            <table id="users-table" class="display table text-center row-border table-striped table-hover cell-border" style="width:100%">
                <thead class = "">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de creacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            @can('editar-permiso')
                            <a href="{{ route('permissions.edit', $item->id) }}" class="btn"  id="btn-edit"  data-bs-toggle="tooltip" title="Editar permiso">
                                <i class="fa fa-pencil fa-2x"></i>
                            </a>
                            @endcan
                            @can('borrar-permiso')
                            <a href="#delete{{$item->id}}" id="btn-delete" data-toggle="modal" class="btn" data-bs-toggle="tooltip" title="Eliminar permiso" >
                                <i class="fa fa-trash fa-2x"></i>
                            </a>
                            @endcan
                            @include('components.modal',['dir'=>'permissions.destroy'])
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@stop

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#users-table').DataTable({
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
