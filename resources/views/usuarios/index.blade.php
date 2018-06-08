@extends('template.base')

@section('content-title', 'Gestión de Usuarios - Usuarios')

@section('content-subtitle', 'Todos los usuarios')

@section('breadcrumb')
    <li>Gestión de Usuarios</li>
    <li class="active">Todas los Usuarios</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-body">
                    <div id="toolbar" class="btn-group">
                        <a href="{{ route('usuarios.crear') }}" class="btn btn-success"><i
                                    class="fa fa-plus"></i> Nuevo Usuario
                        </a>
                    </div>

                    <table
                            id="table"
                            data-toggle="table"
                            data-search="true"
                            data-ajax="ajaxRequest"
                            data-pagination="true"
                            data-striped="true"
                            data-show-refresh="true"
                            data-show-toggle="false"
                            data-show-columns="true"
                            data-show-export="false"
                            data-detail-view="false"
                            data-detail-formatter="detailFormatter"
                            data-minimum-count-columns="2"
                            data-show-pagination-switch="true"
                            data-id-field="id"
                            data-page-list="[5, 10, 20, 50, 100, 200]"
                            data-toolbar="#toolbar">
                        <thead>
                        <tr>
                            {{--<th data-field="status" data-checkbox="true"></th>--}}
                            <th data-field="id" data-cell-style="cellStyle" data-sortable="true">Id</th>
                            <th data-field="nombres" data-cell-style="cellStyle" data-sortable="true">Nombre</th>
                            <th data-field="paterno" data-cell-style="cellStyle" data-sortable="true">A. Paterno</th>
                            <th data-field="materno" data-cell-style="cellStyle" data-sortable="true">A. Materno</th>
                            <th data-field="email" data-cell-style="cellStyle" data-sortable="true">Email</th>
                            <th data-field="rol.nombre" data-cell-style="cellStyle" data-sortable="true">Rol</th>
                            <th data-field="created_at" data-cell-style="cellStyle" data-align="center" data-sortable="true" data-formatter="dateFormat" >Creado</th>
                            <th data-field="updated_at" data-cell-style="cellStyle" data-align="center" data-sortable="true" data-formatter="dateFormat" data-sorteable="true" >Modificado</th>
                            <th data-field="controls" data-cell-style="cellStyle" data-switchable="false" data-formatter="operateFormatterControls" data-show-columns="false"></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')



@endsection
