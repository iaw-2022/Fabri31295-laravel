@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div id="card-form" class="card bg-dark mb-3">
                <div class="card-header text-center"">Crear usuario</div>
                    <div class="card-body bg-white"\>
                        <form id="forms" action="/users" method="POST">
                            @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input id="name" name="name" type="text" class="form-control" tabindex="1" required
                                placeholder="Ingrese el nombre" oninvalid="this.setCustomValidity('Ingrese el nombre aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input id="email" name="email" type="text" class="form-control" tabindex="2" required
                                placeholder="Ingrese el email" oninvalid="this.setCustomValidity('Ingrese el email aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input id="password" name="password" type="text" class="form-control" tabindex="2" required
                                placeholder="Ingrese el contraseña" oninvalid="this.setCustomValidity('Ingrese la contraseña aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div id="buttons-forms">
                            <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
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
