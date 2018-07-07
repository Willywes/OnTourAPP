@extends('template.base')

@section('content-title', 'Gestión de Destinos')

@section('content-subtitle', 'Ver Destinos')

@section('breadcrumb')
    <li>Gestión de Destinos</li>
    <li class="active">Ver Destino</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">
            @include('template._errors')
        </div>

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Informacion de Destino</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('destinos.show', ['destino' => $destino->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$destino->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre: </label>
                                    {{$destino->nombre}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Descripcion: </label>
                                    {{$destino->descripcion}}
                                </div>
                            </div>

                        </div>
                    </form>

                    <a href="{{ route('destinos.index') }}" class="btn btn-primary btn-sm" style="float: right;"><i class="fa fa-arrow-left"></i> Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')


@endsection
