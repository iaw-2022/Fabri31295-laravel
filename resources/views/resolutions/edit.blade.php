@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div id="card-form" class="card bg-dark mb-3">
                <div class="card-header text-center"">Editar registro</div>
                    <div class="card-body bg-white"\>
                        <form id="forms" action="/resolutions/{{$resolution->id}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div id="name-createResolution" class="mb-3">
                            <label for="" class="form-label">Resolucion</label>
                            <input id="name1" name="name1" type="text" class="form-control" value="{{$name1}}" required
                                placeholder="Ingrese el ancho" oninvalid="this.setCustomValidity('Ingrese el ancho aqui')"
                                oninput="this.setCustomValidity('')">
                            <label for="" class="form-label">x</label>
                            <input id="name1" name="name2" type="text" class="form-control" value="{{$name2}}" required
                                placeholder="Ingrese el alto" oninvalid="this.setCustomValidity('Ingrese el alto aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Relacion de aspecto</label>
                            <input id="aspect_ratio" name="aspect_ratio" type="text" class="form-control" value="{{$resolution->aspect_ratio}}" required
                                placeholder="Ingrese la relacion de aspecto" oninvalid="this.setCustomValidity('Ingrese la relacion de aspecto aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div id="buttons-forms">
                            <a href="/resolutions" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </div>
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
