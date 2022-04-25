@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-dark mb-3">
                <div class="card-header text-center" style="background-color: #222831;">Crear registro</div>
                    <div class="card-body bg-white"\>
                        <form action="/resolutions" method="POST">
                            @csrf
                        <div id="name-createResolution" class="mb-3">
                            <label for="" class="form-label">Resolucion</label>
                            <input id="name1" name="name1" type="text" class="form-control" tabindex="1">
                            <label for="" class="form-label">x</label>
                            <input id="name1" name="name2" type="text" class="form-control" tabindex="1">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Relacion de aspecto</label>
                            <input id="aspect_ratio" name="aspect_ratio" type="text" class="form-control" tabindex="2">
                        </div>
                        <a href="/resolutions" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </form>
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
@stop
