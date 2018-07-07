@extends('template.base')

@section('content-title', 'Gestión de Contratos')

@section('content-subtitle', 'Ver Contratos')

@section('breadcrumb')
    <li>Gestión de Contratos</li>
    <li class="active">Ver Contrato</li>
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
                    <h3 class="box-title">Informacion de Contrato</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>INFOMACIÓN GENERAL</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Fecha: </label>
                                {{$contrato->fecha}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Total: </label>
                                $ {{number_format($contrato->total,0,',','.') }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tour: </label>
                                {{ $tour->nombre }}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nombre Colegio: </label>
                                {{$contrato->nombre_colegio}}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>INFOMACIÓN REPRESENTANTE</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nombre: </label>
                                {{$user->nombres}}
                                {{$user->paterno}}
                                {{$user->materno}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Email: </label>
                                {{$user->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Teléfono: </label>
                                {{$user->telefono ? $user->telefono : 'Sin Télefono'}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Celular: </label>
                                {{ $user->celular ? $user->celular : 'Sin Celular' }}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>INFOMACIÓN CURSO</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nombre: </label>
                                {{$curso->nombre}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')


@endsection
