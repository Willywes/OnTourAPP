@extends('template.base')

@section('content-title', 'Gestión de Tours - Tours')

@section('content-subtitle', 'Crear Tours')

@section('breadcrumb')
    <li>Gestión de Tours</li>
    <li class="active">Crear Tour</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>
        <div class="col-md-12">
            @include('template._errors')
        </div>

        <div class="col-md-9">

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
                                <div class="form-group {{ $errors->has('destino_id') ? 'has-error':'' }}">
                                    <label class="control-label" for="destino_id">Destino</label>
                                    <select class="form-control"
                                            name="destino_id"
                                            id="destino"
                                            required>
                                        <option value="">Seleccione destino</option>
                                        @foreach($destinos as $destino)
                                            <option value="{{ $destino->id }}" {{ $destino->id == old('destino_id')  ? 'selected' : ''  }}>{{ strtoupper($destino->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('destino_id', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

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
                                <div class="form-group {{ $errors->has('precio_base') ? 'has-error':'' }}">
                                    <label for="precio_base">Precio Base</label>
                                    <input required type="precio_base"
                                           class="form-control"
                                           id="precio_base"
                                           name="precio_base"
                                           onkeypress="return validarNum(event)"
                                           onpaste="return false"
                                           placeholder="Ingrese el Precio Base"
                                           value="{{ old('precio_base') }}">
                                           {!! $errors->first('precio_base', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('dias') ? 'has-error':'' }}">
                                    <label for="dias">Cantidad de Dias</label>
                                    <input required type="dias"
                                           class="form-control"
                                           id="dias"
                                           name="dias"
                                           onkeypress="return validarNum(event)"
                                           onpaste="return false"
                                           placeholder="Ingrese la Cantidad de Dias"
                                           value="{{ old('dias') }}" >
                                           {!! $errors->first('dias', '<span class="help-block">:message</span>') !!}
                                </div>
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
