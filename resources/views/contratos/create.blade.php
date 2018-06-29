@extends('template.base')

@section('content-title', 'Gestión de Contratos - Contratos')

@section('content-subtitle', 'Crear Contratos')

@section('breadcrumb')
    <li>Gestión de Contratos</li>
    <li class="active">Crear Contrato</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>
        <form action="{{ route('contratos.store') }}" method="POST">

            {{ csrf_field() }}

            <div class="col-md-12" style="margin-bottom: 15px;">
                <button class="btn btn-primary" style="float: right;"> Guardar Contrato</button>
            </div>

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">DATOS DEL CONTRATO</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre_colegio">Nombre Colegio</label>
                                    <input type="text"
                                           class="form-control"
                                           id="nombre_colegio"
                                           name="nombre_colegio"
                                           placeholder="Ingrese Nombre del Colegio">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Servicios adicionales</label>
                                <input type="checkbox" name="check" id="check" value="1"
                                       onchange="javascript:mostrar()"/>
                                <div id="serviciosAD" style="display: none;">
                                    <ul class="list-unstyled">
                                        @foreach($servicios as $servicio)
                                            <li ><input type="checkbox" name="servicios[]" value="{{$servicio->id}}"> {{ $servicio->nombre }} | $ {{ number_format($servicio->precio,0)}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3" >
                                <div style="background: #3085ff; padding: 15px; color: white; text-align: center;">

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tour_id">Seleccione Tour</label>
                                    <select class="form-control" id="tour_id" name="tour_id">
                                        <option value="">Seleccione Tour</option>
                                        @foreach($tours as $tour)
                                            <option value="{{ $tour->id }}" {{ $tour->id == old('tour_id')  ? 'selected' : ''  }}>{{ strtoupper($tour->nombre) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>

            </div>


            <div class="col-md-12  ">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">DATOS DEL REPRESENTANTE</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                    <label for="email">Email</label>
                                    <input required type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           placeholder="Ingrese el Email"
                                           value="{{ old('email') }}">
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                                    <label for="password" class="control-label">Contraseña</label>
                                    <div class="input-group">
                                        <input required id="password"
                                               name="password"
                                               class="form-control"
                                               placeholder="Password"
                                               value="{{ old('password') }}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-flat" type="button"
                                                    onclick="generatePassword()">
                                                <i class="fa fa-key"></i> Generar
                                            </button>
                                        </div>
                                    </div>
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('nombres') ? 'has-error':'' }}">
                                    <label for="nombres">Nombres</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="nombres"
                                           name="nombres"
                                           placeholder="Ingrese el Nombres"
                                           value="{{ old('nombres') }}">
                                    {!! $errors->first('nombres', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('paterno') ? 'has-error':'' }}">
                                    <label for="paterno">Apellido Paterno</label>
                                    <input required type="text"
                                           class="form-control"
                                           id="paterno"
                                           name="paterno"
                                           placeholder="Ingrese el Apellido Paterno"
                                           value="{{ old('paterno') }}">
                                    {!! $errors->first('paterno', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="materno">Apellido Materno</label>
                                    <input type="text"
                                           class="form-control"
                                           id="materno"
                                           name="materno"
                                           placeholder="Ingrese el Apellido Materno"
                                           value="{{ old('materno') }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="number"
                                           class="form-control"
                                           id="telefono"
                                           name="telefono"
                                           placeholder="Ingrese el Teléfono"
                                           value="{{ old('telefono') }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="number"
                                           class="form-control"
                                           id="celular"
                                           name="celular"
                                           placeholder="Ingrese el Celular"
                                           value="{{ old('celular') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-12  ">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">DATOS DEL CURSO</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('nombre_curso') ? 'has-error':'' }}">
                                    <label for="nombre_curso">Nombre del Curso</label>
                                    <input required type="nombre_curso"
                                           class="form-control"
                                           id="nombre_curso"
                                           name="nombre_curso"
                                           placeholder="Ingrese el Nombre Curso"
                                           value="{{ old('nombre_curso') }}">
                                    {!! $errors->first('nombre_curso', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('descripcion_curso') ? 'has-error':'' }}">
                                    <label for="descripcion_curso">Descripción</label>
                                    <textarea row="3"
                                           class="form-control"
                                           id="descripcion_curso"
                                           name="descripcion_curso"
                                           placeholder="Ingrese el Nombre Curso">{{ old('descripcion_curso') }}</textarea>
                                    {!! $errors->first('descripcion_curso', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                        </div>

                        <div class="row">




                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-12" style="margin-bottom: 15px;">
                <button class="btn btn-primary" style="float: right;"> Guardar Contrato</button>
            </div>


        </form>
    </div>
@endsection

@section('styles')


@endsection

@section('scripts')
    <script>
        /* password generator */
        function generatePassword() {
            var pass = Math.random().toString(36).substring(2);
            $('#password').val(pass);
        }
    </script>

    <script type="text/javascript">

        function mostrar() {
            element = document.getElementById("serviciosAD");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display = 'block';
            }
            else {
                element.style.display = 'none';
            }
        }
    </script>


@endsection
