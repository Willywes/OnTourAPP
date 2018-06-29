<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Nombre Usuario</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
        </div>
    </div>
    {{--<!-- search form -->--}}
    {{--<form action="#" method="get" class="sidebar-form">--}}
        {{--<div class="input-group">--}}
            {{--<input type="text" name="q" class="form-control" placeholder="Buscar...">--}}
            {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
        {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMINISTRACIÓN</li>
        <li>
            <a href="{{ route('usuarios.index') }}">
                <i class="fa fa-users"></i> <span>Gestión de Usuarios</span>
            </a>
        </li>

        <li>
            <a href="{{ route('servicios-adicionales.index') }}">
                <i class="fa fa-plus-square"></i> <span>Servicios Adicionales</span>
            </a>
        </li>

        <li>
            <a href="{{ route('destinos.index') }}">
                <i class="fa fa-plane"></i> <span>Destinos</span>
            </a>
        </li>

        <li>
            <a href="{{ route('tours.index') }}">
                <i class="fa fa-circle-o-notch"></i> <span>Tours</span>
            </a>
        </li>

        <li class="header">CONTRATOS</li>
        <li>
            <a href="{{ route('contratos.index') }}">
                <i class="fa fa-book"></i> <span>Contratos</span>
            </a>
        </li>
        <li>
            <a href="{{ route('contratos.index') }}">
                <i class="fa fa-bank"></i> <span>Abonos</span>
            </a>
        </li>

    </ul>
</section>