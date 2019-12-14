{{-- Topbar Start --}}
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        {{-- Notifications --}}


        {{-- User options --}}
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ Auth::user()->name }} 
                    <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                {{-- item --}}
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido !</h6>
                </div>

                {{-- item --}}
                <a href="{{ route('users.show',  Auth::user()->id ) }}" class="dropdown-item notify-item">
                    <i class="remixicon-account-circle-line"></i>
                    <span>Mi Cuenta</span>
                </a>

                {{-- item --}}
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="remixicon-lock-line"></i>
                    <span>Bloquear pantalla</span>
                </a>

                <div class="dropdown-divider"></div>

                {{-- item --}}
                <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                    <i class="remixicon-logout-box-line"></i>
                    <span>{{ __('Salir') }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>

            </div>
        </li>

        {{-- View Charts --}}
        <li class="dropdown notification-list">
            <a href="{{ url('/') }}" target="_blank" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-bar-chart-2"></i>
            </a>
        </li>

    </ul>

    {{-- LOGO --}}
    <div class="logo-box">
        <a href="{{ url('/home') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset('images/logo-light.png') }}" alt="" height="50">
                {{-- <span class="logo-lg-text-light">Xeria</span> --}}
            </span>
            <span class="logo-sm">
                {{-- <span class="logo-sm-text-dark">X</span> --}}
                <img src="{{ asset('images/logo-sm.png') }}" alt="" height="24">
            </span>
        </a>
    </div>

    {{-- Mobile menu expand --}}
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
    </ul>
</div>
{{-- end Topbar --}}