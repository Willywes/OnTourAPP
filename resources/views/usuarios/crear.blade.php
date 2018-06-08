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

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Usuario</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">
                    <h3>ejemplo</h3>
                    <form action="">
                        <div class="form-group" id="group_error_rol">
                            <label class="control-label" for="rol"></label>
                            <select class="form-control"
                                    name="rol"
                                    id="rol">
                                <option value="">Seleccione Rol </option>
                                @foreach($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ strtoupper($rol->nombre) }}</option>
                                @endforeach
                            </select>
                            <span id="error_rol" class="help-block"></span>
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