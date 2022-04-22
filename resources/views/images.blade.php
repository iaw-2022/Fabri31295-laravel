@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-white mb-3">
                <div class="card-header text-white text-center" style="background-color: #222831;">Imagenes</div>
                    <div class="card-body" \\>
                        <table id="images-table" class="table  table-hover  text-center table-white table-bordered table-striped">
                            <thead class = "thead">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Resolucion</th>
                                    <th>Precio U$S</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->category_name}}</td>
                                    <td>{{$item->resolution_name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>
                                        <a class="btn btn-sm" data-toggle="modal" data-target="#myModal">Preview</a>
                                    </td>
                                </tr>
                                @endforeach
                                <div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h5 class="modal-title">Preview</h5>
                                        </div>
                                        <div class="modal-body">
                                            <img src="#" class="img-responsive">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" onclick="$('#myModal').modal('hide');">Close</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
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
                }
            });
        } );
    </script>
@stop
