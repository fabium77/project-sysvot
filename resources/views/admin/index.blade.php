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
                            <div class="card-body text-center">
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
                                <h4 class="header-title mb-0">Gráfico general Gobernador</h4>

                                    {{-- Grafica --}}
                                    {{-- <div class="text-center" id="piechart_3d" style="width: 1200px; height: 500px;"></div> --}}
                                    <div class="" id="piechart_3d" style="width: 100%; height: 150%;"></div>


                                
                                {{-- <div id="chartResults" class="collapse pt-3 show" dir="ltr">
                                    <div id="apex-column-1" class="apex-charts"></div>
                                </div>  --}}
                                <!-- collapsed end -->
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
                            <h4 class="header-title mb-3">Registro de actividad - Ultimas Actas Cargadas</h4>
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Operador</th>
                                    <th scope="col">Mesa Cargada</th>
                                    <th scope="col">Fecha</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Actividad as $item)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>
                                                    <a href="{{ route('users.show', $item->iduser) }}">
                                                            {{$item->Usuario}}
                                                    </a>
                                            </td>

                                            <td>
                                                <a href="{{ route('mesas.show', $item->idMesa) }}">
                                                    {{ $item->numero }}
                                                </a>
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            

                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div> 
                {{-- end row --}}
                
            </div>
            {{-- container --}}
         
        </div>

        {{-- content --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Votos', 'Gobernador'],
            @foreach ($estadisticas as $item)
              ['{{ $item->Lista}}', {{ $item->Votos}}],
            @endforeach
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        
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
 