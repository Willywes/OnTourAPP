@extends('template.base')

@section('content-title', 'Gestión de Servicios Adicionales')

@section('content-subtitle', 'Todos los Servicios Adicionales')

@section('breadcrumb')
    <li>Gestión de Servicios Adicionales</li>
    <li class="active">Todos los Servicios Adicionales</li>
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
                        <a href="{{ route('servicios-adicionales.create') }}" class="btn btn-success"><i
                                    class="fa fa-plus"></i> Nuevo Servicio Adicional
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
                                <th data-sortable="true">Nombre</th>
                                <th data-sortable="true">Tipo</th>
                                <th data-sortable="true">Precio</th>
                                <th data-cell-style="cellStyle" > </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($servicios_adicionales as $servicio_adicional)
                                <tr>
                                    <td>{{ $servicio_adicional->id }}</td>
                                    <td>{{ $servicio_adicional->nombre }}</td>
                                    <td>{{ $servicio_adicional->tipo }}</td>
                                    <td>{{ $servicio_adicional->precio }}</td>
                                    <td style="white-space: nowrap;">
                                        <a href="{{ route('servicios-adicionales.show',['servicio_adicional' => $servicio_adicional->id] ) }}" class="btn btn-info btn-sm" title="Ver Más">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('servicios-adicionales.edit',['servicio_adicional' => $servicio_adicional->id] ) }}" class="btn btn-warning btn-sm" title="Editar">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('servicios-adicionales.destroy',['servicio_adicional' => $servicio_adicional->id] ) }}" class="btn btn-danger btn-sm" title="Eliminar">
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
