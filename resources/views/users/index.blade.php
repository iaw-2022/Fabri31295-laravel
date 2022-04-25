@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
            <div class="card bg-dark mb-3">
                <div id="card-header" class="card-header text-white text-center">Usuarios
                    <a id="btn-crear" href="/users/create" class="btn btn-primary">CREAR</a>
                </div>
                    <div class="card-body bg-white ">
                        <table id="users-table" class="display table text-center row-border  table-striped table-hover cell-border" style="width:100%">
                            <thead class = "">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha de creacion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <form action="{{ route('users.destroy',$item->id) }}" method="POST">
                                        <a href="/users/{{$item->id}}/edit" class="btn btn-info">Editar</a>
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
