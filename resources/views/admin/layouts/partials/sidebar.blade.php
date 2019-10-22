{{-- ========== Left Sidebar Start ========== --}}
<div class="left-side-menu">

    <div class="slimscroll-menu">

        {{-- Sidemenu --}}
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navegación</li>

                <li>
                <a href="{{ url('/home') }}" class="waves-effect">
                        <i class="remixicon-dashboard-line"></i>
                        <span> Inicio </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Mantenimiento</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="remixicon-calendar-line"></i>
                        <span> Comicios </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="elecciones.html" class="waves-effect">
                                Elecciones
                            </a>
                        </li>

                        <li>
                            <a href="provincias.html" class="waves-effect">
                                Provincias
                            </a>
                        </li>

                        <li>
                            <a href="secciones.html" class="waves-effect">
                                Secciones
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('circuitos') }}" class="waves-effect">
                                Circuitos
                            </a>
                        </li>

                        <li>
                            <a href="escuelas.html" class="waves-effect">
                                Escuelas
                            </a>
                        </li>
                        
                        <li>
                            <a href="mesas.html" class="waves-effect">
                                Mesas
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="remixicon-group-line"></i>
                        <span>Agrupaciones Políticas  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @can('agrupoliticas.index')
                        <li>
                            <a href="{{ url('agrupacionespoliticas') }}" class="waves-effect">
                                Partidos
                            </a>
                        </li>
                        @endcan

                        <li>
                            <a href="{{ url('listainternas') }}" class="waves-effect">
                                Listas
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="cargos.html" class="waves-effect">
                        <i class="remixicon-file-list-line"></i>
                        <span> Cargos </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Administración</li>

                @can('users.index')
                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect">
                        <i class=" remixicon-user-fill"></i>
                        <span> Usuarios </span>
                    </a>
                </li>
                @endcan

                @can('roles.index')
                <li>
                    <a href="{{ route('roles.index') }}" class="waves-effect">
                        <i class="remixicon-admin-fill"></i>
                        <span> Roles </span>
                    </a>
                </li>
                @endcan

            </ul>

        </div>
        {{-- End Sidebar --}}

        <div class="clearfix"></div>

    </div>
    {{-- Sidebar -left --}}

</div>
{{-- Left Sidebar End --}}