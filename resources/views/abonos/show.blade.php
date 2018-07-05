@extends('template.base')

@section('content-title', 'Gestión de Usuarios')

@section('content-subtitle', 'Ver Usuarios')

@section('breadcrumb')
    <li>Gestión de Usuarios</li>
    <li class="active">Ver Usuario</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">
            @include('template._errors')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Informacion de Usuario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('usuarios.show', ['usuario' => $user->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="rol_id">Rol: </label>
                                    {{$user->rol_id}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email: </label>
                                    {{$user->email}}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombres">Nombres: </label>
                                    {{$user->nombres}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="paterno">Apellido Paterno: </label>
                                    {{$user->nombres}}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="materno">Apellido Materno: </label>
                                    {{$user->nombres}}
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Telefono: </label>
                                    {{$user->nombres}}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular: </label>
                                    {{$user->nombres}}
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')


@endsection
