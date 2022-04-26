@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-dark mb-3">
<div id="card-header"  class="card-header text-white text-center" >Imagenes
                        <a id="btn-crear" href="/images/create" class="btn btn-primary">CREAR</a>
                    </div>
                    <div class="card-body bg-white"\>
                        <table id="images-table" class="table text-center  table-hover  table-striped" style="width:100%">
                            <thead class = "thead">
                                <tr>
                                    <th>Preview</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Resolucion</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td><img src="{{$item->url}}" width="120px;" height="90px;" alt="preview"/></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->resolution}}</td>
                                    <td>{{'U$S '.$item->price}}</td>
                                    <td id="actions">
                                        <form action="{{ route('images.destroy',$item->id) }}" method="POST">
                                            <a href="/images/{{$item->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#images-table').DataTable({
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
