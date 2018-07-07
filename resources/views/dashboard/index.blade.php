@extends('template.base')

@section('content-title', 'Panel de Control')

@section('content-subtitle', '')

@section('breadcrumb')
    <li class="active">Inicio</li>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Usuarios</span>
                    <span class="info-box-number">{{ $data->total_usuarios }}</span>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-sm" style="float: right;">Entrar <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-map-pin"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Destinos</span>
                    <span class="info-box-number">{{ $data->total_destino }}</span>
                    <a href="{{ route('destinos.index') }}" class="btn btn-primary btn-sm" style="float: right;">Entrar <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-plane"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Tours</span>
                    <span class="info-box-number">{{ $data->total_tour }}</span>
                    <a href="{{ route('tours.index') }}" class="btn btn-primary btn-sm" style="float: right;">Entrar <i class="fa fa-arrow-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Contratos</span>
                    <span class="info-box-number">{{ $data->total_contratos }}</span>
                </div>
                <a href="{{ route('contratos.index') }}" class="btn btn-primary btn-sm" style="float: right;">Entrar <i class="fa fa-arrow-right"></i></a>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
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

@endsection
