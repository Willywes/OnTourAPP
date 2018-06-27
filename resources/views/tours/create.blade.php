.@extends('template.base')

@section('content-title', 'Gestión de Tour - Tour')

@section('content-subtitle', 'Crear Tour')

@section('breadcrumb')
    <li>Gestión de Tour</li>
    <li class="active">Crear Tour</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Nuevo Tour</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('tours.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre">Nombre</label>
                                  <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el Nombre">
                            </div>
                        </div>

                        <div class="row">
                             <div class="col-md-6">
                                <div class="form-group" id="group_error_destino">
                                    <label class="control-label" for="destino_id">Destino</label>
                                    <select class="form-control"
                                            name="destino_id"
                                            id="destino_id"
                                            required>
                                        <option value="">Seleccione Destino </option>
                                        @foreach($destinos as $destino)
                                            <option value="{{ $destino->id }}">{{ strtoupper($destino->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    <span id="error_destino" class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="dias">Cantidad de dias</label>
                                  <input required type="text" class="form-control" id="dias" name="dias" placeholder="Ingrese la Cantidad de Dias">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="precio_base">Precio Base</label>
                                  <input required type="text" class="form-control" id="precio_base" name="precio_base" placeholder="Ingrese el Precio Base">
                            </div>
                        </div>


                        
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Tour</button>
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
