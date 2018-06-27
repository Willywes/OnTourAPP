.@extends('template.base')

@section('content-title', 'Gestión de Alumnos - Alumnos')

@section('content-subtitle', 'Crear Alumnos')

@section('breadcrumb')
    <li>Gestión de Alumnos</li>
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


                    <form action="{{ route('alumnos.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="rut">Rut</label>
                                  <input required type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese el Rut">
                            </div>
                        </div>
                        
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="nombres">Nombres</label>
                                  <input required type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres del alumno">
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
                            <div class="col-md-6">
                                <div class="form-group" id="group_error_curso">
                                    <label class="control-label" for="curso_id">Curso</label>
                                    <select class="form-control"
                                            name="curso_id"
                                            id="curso_id"
                                            required>
                                        <option value="">Seleccione Curso </option>
                                        @foreach($roles as $curso)
                                            <option value="{{ $curso->id }}">{{ strtoupper($curso->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    <span id="error_curso" class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="group_error_apoderado">
                                    <label class="control-label" for="apoderado_id">Apoderado</label>
                                    <select class="form-control"
                                            name="apoderado_id"
                                            id="apoderado_id"
                                            required>
                                        <option value="">Seleccione Apoderado </option>
                                        @foreach($users as $apoderado)
                                            <option value="{{ $apoderado->id }}">{{ strtoupper($apoderado->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    <span id="error_apoderado" class="help-block"></span>
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
