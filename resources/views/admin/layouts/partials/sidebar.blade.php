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

                        @can('circuitos.index')     

                            <li>
                                <a href="{{ route('circuitos.index') }}" class="waves-effect">
                                    
                                     Circuitos
                                </a>
                            </li>
                            
                        @endcan

                        @can('escuelas.index') 
                        <li>
                            <a href="{{ route('escuelas.index') }}" class="waves-effect">
                                Escuelas
                            </a>
                        </li>
                        @endcan
                        @can('mesas.index')                         
                        <li>
                            <a href="{{ route('mesas.index') }}" class="waves-effect">
                                Mesas
                            </a>
                        </li>
                        @endcan
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
                        @can('listainternas.index')
                        <li>
                            <a href="{{ url('listainternas') }}" class="waves-effect">
                                Listas
                            </a>
                        </li>
                        @endcan

                        @can('listainternas.index')
                        <li>
                            <a href="{{ url('listainterna_has_cargoselectivos') }}" class="waves-effect">
                                Candidatos
                            </a>
                        </li>
                        @endcan

                    </ul>
                </li>
                @can('cargoselectivos.index')
                <li>
                    <a href="{{ url('cargoselectivos') }}" class="waves-effect">
                        <i class="remixicon-file-list-line"></i>
                        <span> Cargos Electivos </span>
                    </a>
                </li>
                @endcan

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