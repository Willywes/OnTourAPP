@extends('template.base')

@section('content-title', 'Gestión de Usuarios')

@section('content-subtitle', 'Editar Usuarios')

@section('breadcrumb')
    <li>Gestión de Usuarios</li>
    <li class="active">Editar Usuario</li>
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
                    <h3 class="box-title">Editar Usuario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('usuarios.update', ['usuario' => $user->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('rol_id') ? 'has-error':'' }}">
                                    <label class="control-label" for="rol_id">Rol</label>
                                    <select class="form-control"
                                            name="rol_id"
                                            id="rol"
                                            required>
                                        <option value="">Seleccione Rol</option>
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}" {{ $rol->id == $user->rol_id ? 'selected' : ''  }}>{{ strtoupper($rol->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('rol_id', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                    <label for="email">Email</label>
                                    <input required type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           placeholder="Ingrese el Email"
                                           value="{{ $user->email or old('email')  }}">
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('nombres') ? 'has-error':'' }}">
                                    <label for="nombres">Nombres</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="nombres"
                                           name="nombres"
                                           placeholder="Ingrese el Nombres"
                                           value="{{ $user->nombres or old('nombres') }}">
                                    {!! $errors->first('nombres', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('paterno') ? 'has-error':'' }}">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="paterno"
                                           name="paterno"
                                           placeholder="Ingrese el Apellido Paterno"
                                           value="{{ $user->paterno or old('paterno') }}">
                                    {!! $errors->first('paterno', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text"
                                           class="form-control"
                                           id="materno"
                                           name="materno"
                                           placeholder="Ingrese el Apellido Materno"
                                           value="{{ $user->materno or old('materno') }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="number"
                                           class="form-control"
                                           id="telefono"
                                           name="telefono"
                                           placeholder="Ingrese el Teléfono"
                                           value="{{ $user->telefono or old('telefono') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="number"
                                           class="form-control"
                                           id="celular"
                                           name="celular"
                                           placeholder="Ingrese el Celular"
                                           value="{{ $user->celular or old('celular') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Usuario
                                </button>
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
