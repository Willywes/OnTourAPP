@extends('template.base')

@section('content-title', 'Gestión de Usuarios')

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
                        <a href="{{ route('contratos.create') }}" class="btn btn-success"><i
                                    class="fa fa-plus"></i> Nuevo Usuario
                        </a>
                    </div>

                    <table
                            id="table"
                            data-toggle="table"
                            data-search="true"
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
                                <th data-cell-style="cellStyle" data-sortable="true">Id</th>
                                <th data-sortable="true">Fecha</th>
                                <th data-sortable="true">Colegio</th>
                                <th data-sortable="true">Curso</th>
                                <th data-sortable="true">Representante de curso</th>
                                <th data-sortable="true">Tour</th>
                                <th data-cell-style="cellStyle" > </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($contratos as $contrato)
                                <tr>
                                    <td>{{ $contrato->id }}</td>
                                    <td>{{ $contrato->fecha }}</td>
                                    <td>{{ $contrato->colegio }}</td>
                                    <td>{{ $contrato->curso->nombre }}</td>
                                    <td>{{ $contrato->representante->nombre }}</td>
                                    <td>{{ $contrato->tour->nombre }}</td>
                                    <td style="white-space: nowrap;">
                                        <a href="{{ route('usuarios.show',['usuario' => $contrato->id] ) }}" class="btn btn-info btn-sm" title="Ver Más">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('usuarios.edit',['usuario' => $contrato->id] ) }}" class="btn btn-warning btn-sm" title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('usuarios.destroy',['usuario' => $contrato->id] ) }}" class="btn btn-danger btn-sm" title="Eliminar">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')

    <link rel="stylesheet" href="/assets/bootstraptable/dragtable.css">
    <link rel="stylesheet" href="/assets/bootstraptable/bootstrap-table-reorder-rows.css">
    <link rel="stylesheet" href="/assets/bootstraptable/bootstrap-table-fixed-columns.css">
    <link rel="stylesheet" href="/assets/bootstraptable/bootstrap-table.min.css">

@endsection

@section('scripts')
    <script src="/assets/bootstraptable/bootstrap-table.min.js"></script>
    <script src="/assets/bootstraptable/bootstrap-table-es-ES.min.js"></script>
    <script src="/assets/bootstraptable/bootstrap-table-export.min.js"></script>
    <script src="/assets/bootstraptable/tableExport.min.js"></script>

    <script>
        function cellStyle(value, row, index, field) {
            return {
                css: {
                    "white-space": "nowrap",
                    "width": "1%"
                }

            };
        }
    </script>
@endsection
