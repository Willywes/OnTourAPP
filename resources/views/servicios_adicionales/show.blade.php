@extends('template.base')

@section('content-title', 'Gestión de Servicios Adicionales')

@section('content-subtitle', 'Ver Servicios Adicionales')

@section('breadcrumb')
    <li>Gestión de Servicios Adicionales</li>
    <li class="active">Ver Servicio Adicional</li>
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
                    <h3 class="box-title">Informacion de Servicio Adicional</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('servicios-adicionales.show', ['servicio' => $servicio->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$servicio->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre: </label>
                                    {{$servicio->nombre}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tipo">Tipo: </label>
                                    {{$servicio->tipo}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <label for="precio">Precio: </label>
                                    {{$servicio->precio}}
                                </div>
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
