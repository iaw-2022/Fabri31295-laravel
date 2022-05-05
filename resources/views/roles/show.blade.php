@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div id="card-form" class="card bg-dark mb-3">
    <div id="card-header2" class="card-header text-center">Rol {{$role->name}}</div>
        <div class="card-body bg-white"\>
            <div class="mb-3">
                <label class="form-label">Guard</label>
                    <p>{{$role->guard_name}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de creacion</label>
                    <p>{{$role->created_at}}</p>
            </div>
                <label class="form-label">Permisos</label>
            <div id="show-permisos" class="mb-3">
                    @foreach($role->permissions as $permission)
                        <p>{{$permission->name}}</p>
                    @endforeach
            </div>
            <div id="buttons-forms">
                <a href="/roles" class="btn btn-primary" tabindex="5">Volver</a>
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
