@extends('template.base')

@section('content-title', 'Gestión de Servicios Adicionales - Servicios Adicionales')

@section('content-subtitle', 'Crear Servicios Adicionales')

@section('breadcrumb')
    <li>Gestión de Servicios Adicionales</li>
    <li class="active">Crear Servicio</li>
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
                    <h3 class="box-title">Crear Nuevo Servicio</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                    <form action="{{ route('servicios-adicionales.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('nombre') ? 'has-error':'' }}">
                                    <label for="nombre">Nombre</label>
                                    <input required type="nombre"
                                           class="form-control"
                                           id="nombre"
                                           name="nombre"
                                           placeholder="Ingrese el Nombre"
                                           value="{{ old('nombre') }}">
                                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('precio') ? 'has-error':'' }}">
                                    <label for="precio">Precio</label>
                                    <input required type="precio"
                                           class="form-control"
                                           id="precio"
                                           name="precio"
                                           onkeypress="return validarNum(event)"
                                           onpaste="retur false" 
                                           placeholder="Ingrese el Precio"
                                           value="{{ old('precio') }}">
                                           {!! $errors->first('precio', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="col-md-6">
                                <div class="form-group {{ $errors->has('tipo') ? 'has-error':'' }}">
                                    <label for="tipo">Tipo</label>
                                    <input required type="tipo"
                                           class="form-control"
                                           id="tipo"
                                           name="tipo"
                                           placeholder="Ingrese el Tipo"
                                           value="{{ old('tipo') }}">
                                           {!! $errors->first('tipo', '<span class="help-block">:message</span>') !!}
                                </div>

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

<script>
  function validarNum(e){
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numeros = "0123456789";
    especiales = "8-37-38-46";
    teclado_especial = false;

    for (var i in especiales) {

      if (key==especiales[i]) {
        teclado_especial=true;
      }

    }

    if (numeros.indexOf(teclado)==-1 && !teclado_especial) {
      return false;
    }
  }
</script>

@endsection
