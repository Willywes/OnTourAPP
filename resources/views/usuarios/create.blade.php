@extends('template.base')

@section('content-title', 'Gestión de Usuarios')

@section('content-subtitle', 'Crear Usuarios')

@section('breadcrumb')
    <li>Gestión de Usuarios</li>
    <li class="active">Crear Usuario</li>
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
                    <h3 class="box-title">Crear Nuevo Usuario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('usuarios.store') }}" method="POST">

                        {{ csrf_field() }}

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
                                            <option value="{{ $rol->id }}" {{ $rol->id == old('rol_id')  ? 'selected' : ''  }}>{{ strtoupper($rol->nombre) }}</option>
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
                                           value="{{ old('email') }}">
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                                    <label for="password" class="control-label">Contraseña</label>
                                    <div class="input-group">
                                        <input required id="password"
                                               name="password"
                                               class="form-control"
                                               placeholder="Password"
                                               value="{{ old('password') }}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-flat" type="button"
                                                    onclick="generatePassword()">
                                                <i class="fa fa-key"></i> Generar
                                            </button>
                                        </div>
                                    </div>
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
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
                                           value="{{ old('nombres') }}">
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
                                           value="{{ old('paterno') }}">
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
                                           value="{{ old('materno') }}">
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
                                           value="{{ old('telefono') }}">
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
                                           value="{{ old('celular') }}">
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


    <script>
        /* password generator */
        function generatePassword() {
            var pass = Math.random().toString(36).substring(2);
            $('#password').val(pass);
        }
    </script>

@endsection
