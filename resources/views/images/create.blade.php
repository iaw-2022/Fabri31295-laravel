@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="card bg-dark mb-3">
                <div class="card-header text-center" style="background-color: #222831;">Cargar imagen</div>
                    <div class="card-body bg-white"\>
                        <form action="/images" method="POST">
                            @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input id="name" name="name" type="text" class="form-control" tabindex="1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de creacion</label>
                            <input id="date" name="date" type="date" class="form-control" tabindex="1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                                <select option name="option-categories" id="option-categories">
                                    @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Resolucion</label>
                                <select option name="option-categories" id="option-categories">
                                    @foreach($resolutions as $resolution)
                                    <option>{{$resolution->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input id="price" name="price" type="number" class="form-control" tabindex="1">
                        </div>
                        <div class="mb-3">
                            <p>
                                <label for="uploads">
                                Elige la imágen que deseas cargar:
                                </label>
                                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .svg, .gif" multiple>
                            </p>
                        </div>
                        <a href="/images" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
