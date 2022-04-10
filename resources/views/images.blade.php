@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
            <div class="card text-center bg-white mb-3">
                <div class="card-header text-white">Categorias</div>
                    <div class="card-body">
                        <table class="table table-white table-bordered">
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
