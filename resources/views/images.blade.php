@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-white mb-3">
                <div class="card-header text-white text-center" style="background-color: #343a40;">Imagenes</div>
                    <div class="card-body" style="background-color: #F0E9D2;">
                        <table id="images-table" class="table text-center table-white table-bordered">
                            <thead>
                                <tr>
                                    <th>Preview</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Resolucion</th>
                                    <th>Relacion de aspecto</th>
                                    <th>Tamaño</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>KB</td>
                                    <td>ext</td>
                                    <td>ext</td>
                                    <td>ext</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.css"/>
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
