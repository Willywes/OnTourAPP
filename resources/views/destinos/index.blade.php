@extends('template.base')

@section('content-title', 'Gestión de Destinos')

@section('content-subtitle', 'Todos los Destinos')

@section('breadcrumb')
    <li>Gestión de Destinos</li>
    <li class="active">Todos los Destinos</li>
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
                        <a href="{{ route('destinos.create') }}" class="btn btn-success"><i
                                    class="fa fa-plus"></i> Nuevo Destino
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
                                <th data-cell-style="cellStyle" data-sortable="true">Nombres</th>
                                <th data-sortable="true">Descripcion</th>
                                <th data-cell-style="cellStyle" > </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($destinos as $destino)
                                <tr>
                                    <td>{{ $destino->id }}</td>
                                    <td>{{ $destino->nombre }}</td>
                                    <td>{{ $destino->descripcion }}</td>

                                    <td>
                                        <div style="width: max-content; float: left;">
                                            <div style="width: max-content; float: left;">
                                                <a href="{{ route('destinos.show',['destino' => $destino->id] ) }}"
                                                   class="btn btn-info btn-sm" title="Ver Más">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                            <div style="width: max-content; float: left; margin-left: 5px">
                                                <a href="{{ route('destinos.edit',['destino' => $destino->id] ) }}"
                                                   class="btn btn-warning btn-sm" title="Editar">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div style="width: max-content; float: left; margin-left: 5px">
                                                <form class="delete-form"
                                                      action="{{ route('destinos.destroy',['destino' => $destino->id] ) }}"
                                                      method="post">
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    {!! csrf_field() !!}
                                                    <button type="button" onclick="confirmDelete(this)"
                                                            class="btn btn-danger btn-sm" title="Eliminar"
                                                            style="float: left;">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
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
    <script>
        function confirmDelete(val) {
            var form = $(val).parents('form:first');
            swal({
                title: '¿Estas Seguro?',
                text: "Si eliminas este destino, la información será irrecuperable",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#43a047',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'No, cancelar!'
            }).then((result) => {
                if(result.value)
                {
                    form.submit();
                }
            })
        }
    </script>
@endsection
