@extends('template.base')

@section('content-title', 'Gestión de Abonos - Abonos')

@section('content-subtitle', 'Crear Abonos')

@section('breadcrumb')
    <li>Gestión de Abonos</li>
    <li class="active">Enviar Abono</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            @include('template._success')
        </div>

        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Enviar Comprobante</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <div class="box-body">

                    <form action="" method="POST">

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                  <label >Comprobante de pago</label>
                                  <input type="file" class="form-control" id="comprobante" name ="comprobante" placeholder="Seleccione el comprobante de pago">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                  <label >Tipo de pago</label>
                                  <input type="radio"  id="colectivo" name ="colectivo" placeholder="Colectivo" value="true">
                                  <input type="radio"  id="colectivo" name ="colectivo" placeholder="Colectivo" value="false">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float: right;"> Subir comprobante</button>
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
