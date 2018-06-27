.@extends('template.base')

@section('content-title', 'Gestión de Servicios Adicionales - Servicios Adicionales')

@section('content-subtitle', 'Crear Servicios Adicionales')

@section('breadcrumb')
    <li>Gestión de Servicios Adicionales</li>
    <li class="active">Crear Servicios Adicionales</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Nuevo Servicio adicional</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('servicios_adicionales.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="nombre">Nombre</label>
                                  <input required type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el Nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="tipo">Tipo</label>
                                  <input required type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese el Tipo">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="precio">Precio</label>
                                  <input required type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese la Precio">
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
                        <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Servicio</button>
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
