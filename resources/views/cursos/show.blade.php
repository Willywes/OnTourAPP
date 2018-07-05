@extends('template.base')

@section('content-title', 'Gestión de Cursos')

@section('content-subtitle', 'Ver Cursos')

@section('breadcrumb')
    <li>Gestión de Cursos</li>
    <li class="active">Ver Curso</li>
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
                    <h3 class="box-title">Informacion de Curso</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="{{ route('cursos.show', ['curso' => $curso->id]) }}" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$curso->id}}">
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="nombre">Nombre: </label>
                                    {{$curso->nombre}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="descipcion">Descripcion: </label>
                                    {{$curso->descipcion}}
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
