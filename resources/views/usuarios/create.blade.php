@extends('template.base')

@section('content-title', 'Gestión de Usuarios - Usuarios')

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

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Nuevo Usuario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('usuarios.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group" id="group_error_username">
                                    <label class="control-label" for="username">Usuario</label>
                                    <input type="text"
                                           class="form-control"
                                           id="username"
                                           name="username"
                                           placeholder=""
                                           value=""
                                           required>
                                    <span id="error_username" class="help-block"></span>
                                </div>
                            </div>

                            <div class="col-md-6">

                            </div>

                            <div class="col-md-6">
                                <div class="form-group" id="group_error_rol">
                                    <label class="control-label" for="rol_id">Rol</label>
                                    <select class="form-control"
                                            name="rol_id"
                                            id="rol"
                                            required>
                                        <option value="">Seleccione Rol </option>
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ strtoupper($rol->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    <span id="error_rol" class="help-block"></span>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="alumnos3">Email</label>
                          <input required type="email" class="form-control" id="email" name="email" placeholder="Ingrese el Email">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                           <label for="password" class="control-label">Contraseña</label>
                                <div class="input-group">
                                    <input required id="password" name="password" class="form-control" placeholder="Password" >
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-flat" type="button"
                                                onclick="generatePassword()">
                                            <i class="fa fa-key"></i> Generar
                                        </button>
                                    </div>
                                </div>      
                            </div>
                     </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="nombres">Nombres</label>
                          <input required type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese el Nombres">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="paterno">Apellido Paterno</label>
                          <input required type="text" class="form-control" id="paterno" name="paterno" placeholder="Ingrese el Apellido Paterno">
                        </div>
                    </div>
    
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="materno">Apellido Materno</label>
                          <input required type="text" class="form-control" id="materno" name="materno" placeholder="Ingrese el Apellido Materno">
                        </div>
                    </div>
            
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="telefono">Teléfono</label>
                          <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el Teléfono">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                          <label for="celular">Celular</label>
                          <input type="number" class="form-control" id="celular" name="celular" placeholder="Ingrese el Celular">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Usuario</button>
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
