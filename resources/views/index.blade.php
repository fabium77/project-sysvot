<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title>SysVot::{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- App favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        {{-- App css --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
        {{-- Bootstrap Select --}}
        <link href="{{ asset('libs/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        {{-- Begin page --}}
        <div id="wrapper">
            {{-- ============================================================== --}}
            {{-- Start Page Content here --}}
            {{-- ============================================================== --}}
      
            <div class="content">

                {{-- Start Content --}}
                <div class="container-fluid">
                    
                    {{-- start page title --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Elecciones Generales 2019 - Valle Viejo</h4>
                            </div>
                        </div>
                    </div>     
                    {{-- end page title --}}
 
                    {{-- Cards --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-white bg-danger">
                                    <h5 class="card-title text-white">Gustavo Jalile</h5>
                                    <h6 class="card-subtitle text-white">Lista 506 - Juntos por el cambio</h6>
                                </div>
                                <img class="img-fluid" src="{{ asset('images/candidatos/gallogif.gif') }}" alt="Gustavo Jalile">
                                <div class="card-body">
                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                                data-bgColor="#e8e7f4" value="35"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15"/>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 7580 </h2>
                                            <p class="mb-0">Votos</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-white bg-primary">
                                    <h5 class="card-title text-white">Susana Zenteno</h5>
                                    <h6 class="card-subtitle text-white">Lista 503 - Frente de Todos</h6>
                                </div>
                                <img class="img-fluid" src="{{ asset('images/candidatos/susagif.gif') }}" alt="Susana Zenteno">
                                <div class="card-body">
                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                                data-bgColor="#e8e7f4" value="35"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15"/>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 7580 </h2>
                                            <p class="mb-0">Votos</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-white bg-success">
                                    <h5 class="card-title text-white">Guido Medina</h5>
                                    <h6 class="card-subtitle text-white">Lista 69 - GEM</h6>
                                </div>
                                <img class="img-fluid" src="{{ asset('images/candidatos/guidogif.gif') }}" alt="Guido Medina">
                                <div class="card-body">
                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                                data-bgColor="#e8e7f4" value="10"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15"/>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 580 </h2>
                                            <p class="mb-0">Votos</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-white bg-secondary">
                                    <h5 class="card-title text-white">Cristian Barrionuevo</h5>
                                    <h6 class="card-subtitle text-white">Consenso Federal</h6>
                                </div>
                            <img class="img-fluid" src="{{ asset('images/candidatos/gordogif.gif') }}" alt="Cristian Barrionuevo">
                                <div class="card-body">
                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr">
                                            <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                                data-bgColor="#e8e7f4" value="10"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15"/>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"> 580 </h2>
                                            <p class="mb-0">Votos</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    {{-- end row --}}

                    {{-- Charts --}}
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

                    {{-- Widgets --}}
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card-box">
                                <!-- <h4 class="header-title mt-0 mb-4">Búsqueda Avanzada</h4> -->
                                <form action="">
                                   
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <select class="selectpicker" data-live-search="true" data-style="btn-light">
                                                <option title="Circuito">San Isidro</option>
                                                <option title="Circuito">Villa Dolores</option>
                                                <option title="Circuito">Sumalao</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select class="selectpicker" data-live-search="true" data-style="btn-light">
                                                <option title="Escuela">Escuela 1</option>
                                                <option title="Escuela">Escuela 1</option>
                                                <option title="Escuela">Escuela 1</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select class="selectpicker" data-live-search="true" data-style="btn-light">
                                                <option title="Mesa">Mesa 1</option>
                                                <option title="Mesa">Mesa 2</option>
                                                <option title="Mesa">Mesa 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary btn-block mb-0">Buscar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-3">Participación</h4>
                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                            data-bgColor="#e8e7f4" value="80"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> 25758 </h2>
                                        <p class="text-muted mb-0">Votantes Habilitados</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-3">Mesas Escrutadas</h4>
                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                            data-bgColor="#c8ece5" value="77"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> 72 </h2>
                                        <p class="text-muted mb-0">Mesas Habilitadas</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    {{-- end row --}}


                    {{-- Table --}}
                    <div class="row mb-4">
                        <div class="col-xl-12">
                            <div class="card-box">
                                
                                <h4 class=" text-center header-title mb-3">Resultados Generales</h4>
                                
                                <div class="table-responsive border">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr class="table-active ">
                                            <th></th>
                                            <th class="font-weight-bold">Gobernador</th>
                                            <th class="font-weight-bold">Diputados Provinciales</th>
                                            <th class="font-weight-bold">Senadores Provinciales</th>
                                            <th class="font-weight-bold">Intendente</th>
                                            <th class="font-weight-bold">Concejales</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">GEM - Lista 69</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Consenso Federal - Lista 169</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr class="table-info">
                                            <th scope="row">Frente de Todos - Lista 503</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr  class="table-danger">
                                            <th scope="row">Juntos por el cambio - Lista 506</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos en blanco</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos nulos</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos recurridos</th>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    {{-- end row --}}
                    
                </div> 
                {{-- container --}}

            </div> 
            {{-- content --}}

            {{-- Footer Start --}}
            <footer class="footer py-2 border " style="left: 0.8%; right: 0.8%">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2019 &copy; Escrutinio por <a href="#">Old Valley Soft</a> 
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">Acerca de</a>
                                <a href="javascript:void(0);">Ayuda</a>
                                <a href="javascript:void(0);">Contactenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            {{-- end Footer --}}
        
        </div>
        {{-- END wrapper --}}

        {{-- Vendor js --}}
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        <script src="{{ asset('libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('libs/peity/jquery.peity.min.js') }}"></script>

        {{-- Bootstrap Select --}}
        <script src="{{ asset('libs/bootstrap-select/bootstrap-select.min.js') }}"></script>

        {{-- Sparkline charts --}}
        <script src="{{ asset('libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        {{-- Apex Chart --}}
        <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

        {{-- init js --}}
        <script src="{{ asset('js/pages/apexcharts.init.js') }}"></script>

        {{-- App js --}}
        <script src="{{ asset('js/app.min.js') }}"></script>

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

        <script>
            $(document).ready(function(){
                let url = @json(route('actaescrutinio'));
                $.post(url,
                {
                    districto: 1,
                    eleccion: 1,
                    mesa: 1,
                    tipocomicio: 1
                },
                function(data, status) {
                    console.log("Data: " + JSON.stringify(data) + "\nStatus: " + status);
                });
            });
        </script>

    </body>

</html>
