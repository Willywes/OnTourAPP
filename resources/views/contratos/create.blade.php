@extends('template.base')

@section('content-title', 'Gestión de Contratos - Contratos')

@section('content-subtitle', 'Crear Contratos')
<script type="text/javascript">
    function mostrar() {
        element = document.getElementById("serviciosAD");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
@section('breadcrumb')
    <li>Gestión de Contratos</li>
    <li class="active">Crear Contrato</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Nuevo Contrato</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">


                <form action="{{ route('contratos.store') }}" method="POST">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                              <label >Colegio</label>
                              <input type="text" class="form-control" id="colegio" placeholder="Ingrese Nombre del Colegio">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                               <label class="control-label">Representante</label>
                                    <div class="input-group">
                                        <input id="representante" class="form-control" placeholder="Representante" >
                                    </div>      
                                </div>
                         </div>

                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="alumnos1">Seleccione Tour</label>
                          <select class="form-control" id="tour">
                            <option value="">Tour por Francia</option>
                            <option value="">Tour por Chile</option>
                            <option value="">Tour por China</option>
                          </select>
                        </div>
                      </div>

                    </div>  

                    <div class="row">
                      <div class="col-md-3">
                        <label >Servicios adicionales</label>
                        <input type="checkbox" name="check" id="check" value="1" onchange="javascript:mostrar()" />
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-3" id="serviciosAD" style="display: none;">
                        <ul>
                          <li><input type="checkbox" value="comida">Servicio de Comida </li>
                          <li><input type="checkbox" value="lavanderia">Servicio de Lavanderia </li>
                          <li><input type="checkbox" value="spa">Servicio de Spa </li>
                        </ul>
                      </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" style="float: right;"> Guardar Usuario</button>
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
