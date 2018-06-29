@extends('template.base')

@section('content-title', 'Gestión de Destinos - Destinos')

@section('content-subtitle', 'Crear Destinos')

@section('breadcrumb')
    <li>Gestión de Destinos</li>
    <li class="active">Crear Destino</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Nuevo Destino</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('destinos.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('nombre') ? 'has-error':'' }}">
                                    <label for="nombre">Nombre</label>
                                    <input required type="nombre"
                                           class="form-control"
                                           id="nombre"
                                           name="nombre"
                                           placeholder="Ingrese el Nombre de Destino"
                                           value="{{ old('nombre') }}">
                                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('descripcion') ? 'has-error':'' }}">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control"
                                           id="descripcion"
                                           name="descripcion"
                                           placeholder="Ingrese el Descripción"> 
                                           {{old('descripcion') }}</textarea>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Destino</button>
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
