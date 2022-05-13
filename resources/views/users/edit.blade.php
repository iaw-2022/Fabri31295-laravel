@extends('adminlte::page')

@section('title', 'Proyecto de Web')

@section('content_header')
    <h1></h1>
@stop

@section('content')

<div id="card-form" class="card bg-dark mb-3">
                <div id="card-header2" class="card-header text-center"">Editar usuario</div>
                    <div class="card-body bg-white"\>
                        @if ($errors->any())
                            <div class="alert alert-white alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        <form id="forms" action="/users/{{$user->id}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}" required
                                placeholder="Ingrese el nombre" oninvalid="this.setCustomValidity('Ingrese el nombre aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}" required
                                placeholder="Ingrese el email" oninvalid="this.setCustomValidity('Ingrese el email aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ingrese la nueva contraseña (opcional)</label>
                            <input id="password" name="password" type="text" class="form-control"
                                placeholder="Ingrese una nueva contraseña" oninvalid="this.setCustomValidity('Ingrese la contraseña aqui')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Rol</label>
                                <div id="show-roles" class="mb-3">
                                    @foreach($roles as $name)
                                    <label>{{ Form::checkbox('roles[]', $name, in_array($name, $userRoles) ? true : false, array('class' => 'name')) }}
                                        {{ $name }}</label>
                                    <br/>
                                    @endforeach
                                </div>
                            </div>
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
