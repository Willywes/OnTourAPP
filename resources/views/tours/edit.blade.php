@extends('template.base')

@section('content-title', 'Gestión de Tours')

@section('content-subtitle', 'Editar Tours')

@section('breadcrumb')
    <li>Gestión de Tours</li>
    <li class="active">Editar Tour</li>
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
                    <h3 class="box-title">Editar Tour</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('tours.update', ['tour' => $tour->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$tour->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('destino_id') ? 'has-error':'' }}">
                                    <label class="control-label" for="destino_id">Destino</label>
                                    <select class="form-control"
                                            name="destino_id"
                                            id="destino"
                                            required>
                                        <option value="">Seleccione Destino</option>
                                        @foreach($destinos as $destino)
                                            <option value="{{ $destino->id }}" {{ $destino->id == $tour->destino_id ? 'selected' : ''  }}>{{ strtoupper($destino->nombre) }}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('destino_id', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('nombre') ? 'has-error':'' }}">
                                    <label for="nombre">Nombre</label>
                                    <input required type="nombre"
                                           class="form-control"
                                           id="nombre"
                                           name="nombre"
                                           placeholder="Ingrese el Nombre"
                                           value="{{ $tour->nombre or old('nombre')  }}">
                                    {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('precio_base') ? 'has-error':'' }}">
                                    <label for="precio_base">Precio Base</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="precio_base"
                                           name="precio_base"
                                           placeholder="Ingrese el Precio Base"
                                           value="{{ $tour->precio_base or old('precio_base') }}">
                                    {!! $errors->first('precio_base', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('dias') ? 'has-error':'' }}">
                                    <label for="dias">Cantidad de Dias</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="dias"
                                           name="dias"
                                           placeholder="Ingrese el Cantidad de Dias"
                                           value="{{ $user->dias or old('dias') }}">
                                    {!! $errors->first('dias', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float: right;"> Guardar Tour
                                </button>
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
