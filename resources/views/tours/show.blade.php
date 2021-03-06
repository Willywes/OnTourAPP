@extends('template.base')

@section('content-title', 'Gestión de Tours')

@section('content-subtitle', 'Ver Tours')

@section('breadcrumb')
    <li>Gestión de Tours</li>
    <li class="active">Ver Tour</li>
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
                    <h3 class="box-title">Informacion de Tour</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('tours.show', ['tour' => $tour->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$tour->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre: </label>
                                    {{$tour->nombre}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="dias">Cantidad de dias: </label>
                                    {{$tour->dias}}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombres">Destino: </label>
                                    {{$tour->destino_id}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label for="paterno">Precio Base: </label>
                                    $ {{number_format($tour->precio_base, 0 ,',','.')}}
                                </div>
                            </div>
                        </div>


                    </form>

                    <a href="{{ route('tours.index') }}" class="btn btn-primary btn-sm" style="float: right;"><i class="fa fa-arrow-left"></i> Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')


@endsection
