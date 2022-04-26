@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1>Editar registro</h1>
@stop

@section('content')
    <form action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">
    </div>
    <a href="/categories" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
@stop

@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/af-2.3.7/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/datatables.min.js"></script>
@stop