<!-- Left side column. contains the logo and sidebar -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<aside class="main-sidebar" style="font-family: 'Roboto', sans-serif;font-size:15px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel" style="margin-left:35px;">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;font-family: 'Roboto', sans-serif;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                    <br>
                    <br>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-link' style="margin-left:30px;margin-top:10px;margin-bottom:20px;"></i> <span>Inicio</span></a></li>
            <li><a href="{{url('inscripcion') }}"><i class='fa fa-link' style="margin-left:30px;margin-bottom:20px;"></i> <span>Inscripción</span></a></li>
            <li><a href="#"><i class='fa fa-link' style="margin-left:30px;margin-bottom:20px;"></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link' style="margin-left:30px;margin-bottom:20px;"></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link' style="margin-left:30px;margin-bottom:20px;"></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('departamentos') }}" >Departamentos</a></li>
                    <li><a href="{{url('secciones') }}">Secciones</a></li>
                    <li><a href="{{url('carreras') }}">Carreras</a></li>
                    <li><a href="{{url('materias') }}">Materias</a></li>
                    <li><a href="{{url('periodos') }}">Periodos</a></li>
                    <li><a href="{{url('docente') }}">Docentes</a></li>
                    <li><a href="{{url('areas') }}">Areas</a></li>
                    <li><a href="{{url('trayectos') }}">Trayectos</a></li>
                    <li><a href="{{url('datosbasicos') }}">Estudiantes</a></li>
                    <li><a href="{{url('personal') }}">Carga Academica</a></li>
                </ul>
            </li>
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
