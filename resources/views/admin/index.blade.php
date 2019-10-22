@extends('admin.layouts.layout')

@section('content')
    {{-- ============================================================== --}}
    {{-- Start Page Content here --}}
    {{-- ============================================================== --}}

    <div class="content-page">
        <div class="content">

            {{-- Start Content --}}
            <div class="container-fluid">
                
               {{-- start page title --}}
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Elecciones Generales 2019</h4>
                        </div>
                    </div>
                </div>     
                {{-- end page title  --}} 

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="avatar-lg rounded-circle bg-icon-danger float-left">
                                <i class=" mdi mdi-map-marker font-24 avatar-title text-white"></i>
                            </div>
                            <div class="text-right">
                                <h4 class="text-dark mt-2">Valle Viejo</h4>
                                <p class="text-muted mb-0">Sección</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="avatar-lg rounded-circle bg-icon-success float-left">
                                <i class="mdi mdi-human-male-female font-24 avatar-title text-white"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span class="counter">27,578</span></h3>
                                <p class="text-muted mb-0">Total Electores</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="avatar-lg rounded-circle bg-icon-primary float-left">
                                <i class="mdi mdi-email-check font-24 avatar-title text-white"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span class="counter">72</span></h3>
                                <p class="text-muted mb-0">Total Mesas</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="avatar-lg rounded-circle bg-icon-purple float-left">
                                <i class="mdi mdi-office-building font-24 avatar-title text-white"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span class="counter">28</span></h3>
                                <p class="text-muted mb-0">Escuelas</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                {{-- end row --}}

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript: void(0);" data-toggle="reload">
                                        <i class="mdi mdi-refresh"></i>
                                    </a>
                                    <a data-toggle="collapse" href="#chartResults" role="button" aria-expanded="false" aria-controls="cardCollpase5">
                                        <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="javascript: void(0);" data-toggle="remove">
                                        <i class="mdi mdi-close"></i>
                                    </a>
                                </div>
                                <h4 class="header-title mb-0">Gráfico general</h4>

                                <div id="chartResults" class="collapse pt-3 show" dir="ltr">
                                    <div id="apex-column-1" class="apex-charts"></div>
                                </div> <!-- collapsed end -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                {{-- end row --}}

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#activityTable" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-3">Registro de actividad</h4>

                            <div id="activityTable" class="table-responsive">
                                <table class="table table-borderless table-hover table-centered m-0">

                                    <thead class="thead-light">
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Hora</th>
                                            <th>Actividad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                            </td>

                                            <td>
                                                Oct 15, 2018
                                            </td>
                                            
                                            <td>
                                                $125.23
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}
                
            </div>
            {{-- container --}}

        </div>
        {{-- content --}}
@endsection

@section('scripts')
<script src="{{ asset('libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('libs/peity/jquery.peity.min.js') }}"></script>

{{-- Sparkline charts --}}
<script src="{{ asset('libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

{{-- init js --}}
<script src="{{ asset('js/pages/dashboard-1.init.js') }}"></script>

{{-- widgets init js --}}
<script src="{{ asset('js/pages/widgets.init.js') }}"></script>

{{-- Third Party js --}}
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>


{{-- init js --}}
<script src="{{ asset('js/pages/apexcharts.init.js') }}"></script>
@endsection
 