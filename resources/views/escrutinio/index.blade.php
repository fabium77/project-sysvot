<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Escrutinio::Carga de datos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Old Valley Soft" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- App favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        {{-- App css --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        {{-- Begin page --}}
        <div id="wrapper">

            {{-- Topbar Start --}}
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
        
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
                            {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="remixicon-account-circle-line"></i>
                                <span>Mi Perfil</span>
                            </a> --}}

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

                </ul>

                
            </div>
            {{-- end Topbar --}}

            {{-- ============================================================== --}}
            {{-- Start Page Content here --}}
            {{-- ============================================================== --}}

            <div class="content-page" style="margin-left: 0;">
                <div class="content">

                    {{-- Start Content --}}
                    <div class="container-fluid">
                        
                        {{-- start page title --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box" style="left: 0; right: 0">
                                    <h4 class="page-title">Cargar datos escrutinio</h4>
                                </div>
                            </div>
                        </div>     
                        {{-- end page title --}}

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3"> Ingrese los datos</h4>
                                        <div id="rootwizard">
                                            <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                                <li class="nav-item" data-target-form="#gemForm">
                                                    <a href="#gem" data-toggle="tab" class="nav-link">
                                                        <span class="number">69</span>
                                                        <span class="d-none d-sm-inline">GEM</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#cfForm">
                                                    <a href="#cf" data-toggle="tab" class="nav-link">
                                                        <span class="number">182</span>
                                                        <span class="d-none d-sm-inline">Consenso Federal</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#ftForm">
                                                    <a href="#ft" data-toggle="tab" class="nav-link">
                                                        <span class="number">503</span>
                                                        <span class="d-none d-sm-inline">Frente de Todos</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#jpcForm">
                                                    <a href="#jpc" data-toggle="tab" class="nav-link">
                                                        <span class="number">506</span>
                                                        <span class="d-none d-sm-inline">Juntos Por el Cambio</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#finForm">
                                                    <a href="#fin" data-toggle="tab" class="nav-link">
                                                        <span class="number">5.</span>
                                                        <span class="d-none d-sm-inline">Fin de carga</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-0 b-0">

                                                <div class="tab-pane" id="gem">
                                                    <form id="gemForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="diputados" name="diputados" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="senadores" name="senadores" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="intendente" name="intendente" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="concejales" name="concejales" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="cf">
                                                    <form id="cfForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="diputados" name="diputados" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="senadores" name="senadores" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="intendente" name="intendente" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="concejales" name="concejales" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="ft">
                                                    <form id="ftForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="diputados" name="diputados" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="senadores" name="senadores" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="intendente" name="intendente" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="concejales" name="concejales" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="jpc">
                                                    <form id="jpcForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="diputados" name="diputados" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="senadores" name="senadores" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="intendente" name="intendente" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                                                                    <div class="col-md-9">
                                                                        <input type="number" id="concejales" name="concejales" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="fin">
                                                    <form id="finForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <h2 class="mt-0">
                                                                        <i class="mdi mdi-check-all"></i>
                                                                    </h2>
                                                                    <h3 class="mt-0">Gracias !</h3>
                                                    
                                                                    <p class="w-75 mb-2 mx-auto">Los datos fueron cargados.</p>
                                                    
                                                                    <div class="mb-3">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck4" required>
                                                                            <label class="custom-control-label" for="customCheck4">I agree with the Terms and Conditions</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                    </form>
                                                </div>

                                                <ul class="list-inline wizard mb-0">
                                                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary">Previo</a>
                                                    </li>
                                                    <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-secondary">Siguiente</a></li>
                                                </ul>

                                            </div> <!-- tab-content -->
                                        </div> <!-- end #rootwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> 
                        {{-- end row --}}
                        
                    </div> 
                    {{-- container --}}

                </div> 
                {{-- content --}}

                {{-- Footer Start --}}
                <footer class="footer" style="left: 0; right: 0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2019 &copy; Escrutinio por <a href="#">Old Valley Soft</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">Acerca de</a>
                                    <a href="javascript:void(0);">Ayuda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                {{-- end Footer --}}

            </div>

            {{-- ============================================================== --}}
            {{-- End Page content --}}
            {{-- ============================================================== --}}


        </div>
        {{-- END wrapper --> --}}

        {{-- Vendor js --}}
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        {{-- Plugins js --}}
        <script src="{{ asset('libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

        {{-- Init js --}}
        <script src="{{ asset('js/pages/form-wizard.init.js') }}"></script>

        {{-- App js --}}
        <script src="{{ asset('js/app.min.js') }}"></script>
        
    </body>
</html>