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

        <style>


            #porcentaje-lista-506 {
                min-height: 60px !important;
                left: 0 !important;
            }

            #porcentaje-lista-503 {
                min-height: 60px !important;
                left: 0 !important;
            }

            #porcentaje-lista-69 {
                min-height: 60px !important;
                left: 0 !important;
            }

            #porcentaje-lista-504 {
                min-height: 60px !important;
                left: 0 !important;
            }

            #porcentaje-participacion {
                min-height: 60px !important;
                left: 0 !important;
            }

            #porcentaje-mesasEscrutadas {
                min-height: 60px !important;
                left: 0 !important;
            }

            

        </style>

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
                                 <img src="{{ asset('images/logo-dark.png') }}"  class="img-fluid" style="width:6%; margin:0.5%">
                            </div>

                            
                        </div>
                    </div>     
                    {{-- end page title --}}

                                        {{-- Widgets --}}
                                        <div class="row">
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="card-box">
                                                        <!-- <h4 class="header-title mt-0 mb-4">Búsqueda Avanzada</h4> -->
                                                       
                                                           
                                                        <h4 class="page-title"> Elecciones Generales 2019 - Valle Viejo</h4>
                                                            

                    
                                                    </div>
                                                </div>
                        
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card-box">
                                                        <h4 class="header-title mt-0 mb-3">Participación</h4>
                                                        <div class="mt-1">
                                                            <div class="float-left" dir="ltr">
                                                                    <div  id="porcentaje-participacion" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                                                        </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <h4 class="mt-3 pt-1 mb-1" id="votantes"> 25461 </h4>
                                                                <p class="text-muted mb-0">Votantes</p>
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
                                                                    <div  id="porcentaje-mesasEscrutadas" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                                                        </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <h2 class="mt-3 pt-1 mb-1" id="mesasEscrutada"> 78 </h2>
                                                                <p class="text-muted mb-0">Mesas</p>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            {{-- end row --}}
 
                    {{-- Cards --}}
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-white bg-danger">
                                    <h5 class="card-title text-white">Gustavo Jalile</h5>
                                    <h6 class="card-subtitle text-white">Lista 506 - Juntos por el cambio</h6>
                                </div>
                                <img class="img-fluid" src="{{ asset('images/candidatos/gallo.jpg') }}" alt="Gustavo Jalile">
                                <div class="card-body">
                                    <div class="mt-1">
                                        <div class="float-left" dir="ltr"  style="width: 100px;
                                        margin: 0; ">
                                            <div  id="porcentaje-lista-506" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                        </div>
                                        </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1" id="card-lista-506"> 
                                                @foreach ($votosgob as $item)
                                                    @if ($item->Lista == 'Juntos por el Cambio')
                                                    {{$item->Votos }}
                                                    @endif
                                                 @endforeach
                                            </h2>
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
                                <img class="img-fluid" src="{{ asset('images/candidatos/susana.jpg') }}" alt="Susana Zenteno">
                                <div class="card-body">
                                    <div class="mt-1">
                                            <div class="float-left" dir="ltr"  style="width: 100px;
                                            margin: 0; ">
                                                <div  id="porcentaje-lista-503" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                            </div>
                                            </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"  id="card-lista-503"> 
                                            @foreach ($votosgob as $item)
                                               @if ($item->Lista == 'Frente de Todos')
                                               {{$item->Votos }}
                                               @endif
                                            @endforeach
                                        </h2>
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
                                <img class="img-fluid" src="{{ asset('images/candidatos/guido.jpg') }}" alt="Guido Medina">
                                <div class="card-body">
                                    <div class="mt-1">
                                            <div class="float-left" dir="ltr"  style="width: 100px;
                                            margin: 0; ">
                                                <div  id="porcentaje-lista-69" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                            </div>
                                            </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"  id="card-lista-69" >
                                                    @foreach ($votosgob as $item)
                                                    @if ($item->Lista == 'GEM')
                                                    {{$item->Votos }}
                                                    @endif
                                                 @endforeach

                                            </h2>
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
                                    <h6 class="card-subtitle text-white">Lista 504 - Consenso Federal</h6>
                                </div>
                            <img class="img-fluid" src="{{ asset('images/candidatos/gordo.jpg') }}" alt="Cristian Barrionuevo">
                                <div class="card-body">
                                    <div class="mt-1">
                                            <div class="float-left" dir="ltr"  style="width: 100px;
                                            margin: 0; ">
                                                <div  id="porcentaje-lista-504" style="margin: 0px; min-height: 60px !important; height: 64px;">
                                            </div>
                                            </div>
                                        <div class="text-right">
                                            <h2 class="mt-3 pt-1 mb-1"  id="card-lista-504" >
                                                    @foreach ($votosgob as $item)
                                                    @if ($item->Lista == 'Consenso Federal')
                                                    {{$item->Votos }}
                                                    @endif
                                                 @endforeach    
                                            </h2>
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
                                            <td id="gob-69">0</td>
                                            <td id="dip-69">0</td>
                                            <td id="sen-69">0</td>
                                            <td id="int-69">0</td>
                                            <td id="con-69">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Consenso Federal - Lista 504</th>
                                            <td id="gob-504">0</td>
                                            <td id="dip-504">0</td>
                                            <td id="sen-504">0</td>
                                            <td id="int-504">0</td>
                                            <td id="con-504">0</td>
                                        </tr>
                                        <tr class="table-info">
                                            <th scope="row">Frente de Todos - Lista 503</th>
                                            <td id="gob-503">0</td>
                                            <td id="dip-503">0</td>
                                            <td id="sen-503">0</td>
                                            <td id="int-503">0</td>
                                            <td id="con-503">0</td>
                                        </tr>
                                        <tr  class="table-danger">
                                            <th scope="row">Juntos por el cambio - Lista 506</th>
                                            <td id="gob-506">0</td>
                                            <td id="dip-506">0</td>
                                            <td id="sen-506">0</td>
                                            <td id="int-506">0</td>
                                            <td id="con-506">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos en blanco</th>
                                            <td id="gob-vb">0</td>
                                            <td id="dip-vb">0</td>
                                            <td id="sen-vb">0</td>
                                            <td id="int-vb">0</td>
                                            <td id="con-vb">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos nulos</th>
                                            <td id="gob-vn">0</td>
                                            <td id="dip-vn">0</td>
                                            <td id="sen-vn">0</td>
                                            <td id="int-vn">0</td>
                                            <td id="con-vn">0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Votos recurridos</th>
                                            <td id="gob-vr">0</td>
                                            <td id="dip-vr">0</td>
                                            <td id="sen-vr">0</td>
                                            <td id="int-vr">0</td>
                                            <td id="con-vr">0</td>
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
                            2019 &copy; Escrutinio por <a href="#">Gabriel Villalon</a> 
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
/*
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

                */





                 // Importante la tabla Escrutinio debe llenarse con todos los datos de los postulantes y votos nulos sino no funciona

                 var timeout = setInterval(function() {

        $.get( "/listamesas", function( listarmesas ) {



            var mesasEscrutadas = 0;

            //console.log(listarmesas);

            var gob69 = 0;

            var sen69 = 0;

            var dip69 = 0;

            var int69 = 0;

            var con69 = 0;

            var gob503 = 0;

            var sen503 = 0;

            var dip503 = 0;

            var int503 = 0;

            var con503 = 0;

            var gob504 = 0;

            var sen504 = 0;

            var dip504 = 0;

            var int504 = 0;

            var con504 = 0;

            var gob506 = 0;

            var sen506 = 0;

            var dip506 = 0;

            var int506 = 0;

            var con506 = 0;

            var totalVotosGob = 0;

            var totalVotosSen = 0;

            var totalVotosDip = 0;

            var totalVotosInt = 0;

            var totalVotosCon = 0;

            var votantes = 0;

            var gobvb = 0;

            var dipvb = 0;

            var senvb = 0;

            var intvb = 0;

            var convb = 0;

            var gobvn = 0;

            var dipvn = 0;

            var senvn = 0;

            var intvn = 0;

            var convn = 0;

            var gobvr = 0;

            var dipvr = 0;

            var senvr = 0;

            var intvr = 0;

            var convr = 0;



            
            

            listarmesas.forEach(listarmesa => {



            if (listarmesa['cargado']==1)

                {

                   

                    let url = @json(route('actaescrutinio'));
                    $.post(url,
                        {
                            districto: 1,
                            eleccion: 1,
                            mesa: listarmesa['idMesas'],
                            tipocomicio: 1
                        },
                        function(data, status) {
                            //console.log("Data: " + JSON.stringify(data) + "\nStatus: " + status);


                            var votosPartidos = data.votosPartidos;
                            
                            

                            votantes = votantes + data.votantes;

                            mesasEscrutadas = mesasEscrutadas + 1;

                            gobvb = data.votosBlancos.Gobernador;

                            dipvb = data.votosBlancos.Diputado;

                            senvb = data.votosBlancos.Senador;

                            intvb = data.votosBlancos.Intendecia;

                            convb = data.votosBlancos.Concejal;

                            gobvn = data.votosNulos.Gobernador;

                            dipvn = data.votosNulos.Diputado;

                            senvn = data.votosNulos.Senador;

                            intvn = data.votosNulos.Intendecia;

                            convn = data.votosNulos.Concejal;

                            gobvr = data.votosRecurridos.Gobernador;

                            dipvr = data.votosRecurridos.Diputado;

                            senvr = data.votosRecurridos.Senador;

                            intvr = data.votosRecurridos.Intendecia;

                            convr = data.votosRecurridos.Concejal;






                            for (i=1; i< 20; i++ )

                            {
                                

                                //console.log(data);

                                

                                switch (votosPartidos[i].nro) {

                                    case 69:

                                    if (votosPartidos[i].cargo=="Gobernador")

                                    {

                                        gob69 = gob69 + votosPartidos[i].votos;
                                        totalVotosGob = totalVotosGob + gob69;

                                    }

                                    if (votosPartidos[i].cargo=="Senador")

                                    {
                                        sen69 = sen69 + votosPartidos[i].votos;
                                        totalVotosSen = totalVotosSen + sen69;
                                    }

                                    if (votosPartidos[i].cargo=="Diputado")

                                    {
                                        dip69 = dip69 + votosPartidos[i].votos;
                                        totalVotosDip = totalVotosDip + dip69;
                                    }


                                    if (votosPartidos[i].cargo=="Intendecia")
                                    {
                                        int69 = int69 + votosPartidos[i].votos;
                                        totalVotosInt = totalVotosInt + int69;
                                    }


                                    if (votosPartidos[i].cargo=="Concejal")
                                    {
                                        con69 = con69 + votosPartidos[i].votos;
                                        totalVotosCon = totalVotosCon + con69;
                                    }

                                        break;
                                    case 503:

                                    if (votosPartidos[i].cargo=="Gobernador")

                                    {

                                        gob503 = gob503 + votosPartidos[i].votos;
                                        totalVotosGob = totalVotosGob + gob503;

                                    }

                                    if (votosPartidos[i].cargo=="Senador")

                                    {
                                        sen503 = sen503 + votosPartidos[i].votos;
                                        totalVotosSen = totalVotosSen + sen503;
                                    }

                                    if (votosPartidos[i].cargo=="Diputado")

                                    {
                                        dip503 = dip503 + votosPartidos[i].votos;
                                        totalVotosDip = totalVotosDip + dip503;
                                    }


                                    if (votosPartidos[i].cargo=="Intendecia")
                                    {
                                        int503 = int503 + votosPartidos[i].votos;
                                        totalVotosInt = totalVotosInt + int503;
                                    }


                                    if (votosPartidos[i].cargo=="Concejal")
                                    {
                                        con503 = con503 + votosPartidos[i].votos;
                                        totalVotosCon = totalVotosCon + con503;
                                    }

                                        
                                        break;
                                    case 504:

                                    if (votosPartidos[i].cargo=="Gobernador")

                                    {

                                        gob504 = gob504 + votosPartidos[i].votos;
                                        totalVotosGob = totalVotosGob + gob504;

                                    }

                                    if (votosPartidos[i].cargo=="Senador")

                                    {
                                        sen504 = sen504 + votosPartidos[i].votos;
                                        totalVotosSen = totalVotosSen + sen504;
                                    }

                                    if (votosPartidos[i].cargo=="Diputado")

                                    {
                                        dip504 = dip504 + votosPartidos[i].votos;
                                        totalVotosDip = totalVotosDip + dip504;
                                    }


                                    if (votosPartidos[i].cargo=="Intendecia")
                                    {
                                        int504 = int504 + votosPartidos[i].votos;
                                        totalVotosInt = totalVotosInt + int504;
                                    }


                                    if (votosPartidos[i].cargo=="Concejal")
                                    {
                                        con504 = con504 + votosPartidos[i].votos;
                                        totalVotosCon = totalVotosCon + con504;
                                    }

                                        
                                        break;
                                    case 506:
                                    /*
                                        console.log(votosPartidos[i].agrupacionpolitica);
                                        console.log(votosPartidos[i].cargo);
                                        console.log(votosPartidos[i].votos);

                                        document.getElementById("card-lista-506").innerHTML = votosPartidos[i].votos;

                                    */
                                    
                                    if (votosPartidos[i].cargo=="Gobernador")

                                    {

                                        gob506 = gob506 + votosPartidos[i].votos;
                                        totalVotosGob = totalVotosGob + gob506;

                                    }

                                    if (votosPartidos[i].cargo=="Senador")

                                    {
                                        sen506 = sen506 + votosPartidos[i].votos;
                                        totalVotosSen = totalVotosSen + sen506;
                                        
                                    }

                                    if (votosPartidos[i].cargo=="Diputado")

                                    {
                                        dip506 = dip506 + votosPartidos[i].votos;
                                        totalVotosDip = totalVotosDip + dip506;
                                    }


                                    if (votosPartidos[i].cargo=="Intendecia")
                                    {
                                        int506 = int506 + votosPartidos[i].votos;
                                        totalVotosInt = totalVotosInt + int506;
                                    }


                                    if (votosPartidos[i].cargo=="Concejal")
                                    {
                                        con506 = con506 + votosPartidos[i].votos;
                                        totalVotosCon = totalVotosCon + con506;
                                    }

                                            

                                        break;

                                    default:
                                        
                                    }
                                    
                            }

                            document.getElementById("gob-69").innerHTML = gob69;
                            document.getElementById("dip-69").innerHTML = dip69;
                            document.getElementById("sen-69").innerHTML = sen69;
                            document.getElementById("int-69").innerHTML = int69;
                            document.getElementById("con-69").innerHTML = con69;
                            document.getElementById("gob-503").innerHTML = gob503;
                            document.getElementById("dip-503").innerHTML = dip503;
                            document.getElementById("sen-503").innerHTML = sen503;
                            document.getElementById("int-503").innerHTML = int503;
                            document.getElementById("con-503").innerHTML = con503;
                            document.getElementById("gob-504").innerHTML = gob504;
                            document.getElementById("dip-504").innerHTML = dip504;
                            document.getElementById("sen-504").innerHTML = sen504;
                            document.getElementById("int-504").innerHTML = int504;
                            document.getElementById("con-504").innerHTML = con504;
                            document.getElementById("gob-506").innerHTML = gob506;
                            document.getElementById("dip-506").innerHTML = dip506;
                            document.getElementById("sen-506").innerHTML = sen506;
                            document.getElementById("int-506").innerHTML = int506;
                            document.getElementById("con-506").innerHTML = con506;

                            document.getElementById("gob-vb").innerHTML = gobvb;
                            document.getElementById("dip-vb").innerHTML = dipvb;
                            document.getElementById("sen-vb").innerHTML = senvb;
                            document.getElementById("int-vb").innerHTML = intvb;
                            document.getElementById("con-vb").innerHTML = convb;

                            document.getElementById("gob-vn").innerHTML = gobvn;
                            document.getElementById("dip-vn").innerHTML = dipvn;
                            document.getElementById("sen-vn").innerHTML = senvn;
                            document.getElementById("int-vn").innerHTML = intvn;
                            document.getElementById("con-vn").innerHTML = convn;

                            document.getElementById("gob-vr").innerHTML = gobvr;
                            document.getElementById("dip-vr").innerHTML = dipvr;
                            document.getElementById("sen-vr").innerHTML = senvr;
                            document.getElementById("int-vr").innerHTML = intvr;
                            document.getElementById("con-vr").innerHTML = convr;

                            

                            porcgob69 =  gob69*100/totalVotosInt;
                            porcgob503 = gob503*100/totalVotosInt;
                            porcgob504 = gob504*100/totalVotosInt;
                            porcgob506 = gob506*100/totalVotosInt;

                            porcgob69 =  porcgob69.toFixed(2);
                            porcgob503 = porcgob503.toFixed(2);
                            porcgob504 = porcgob504.toFixed(2);
                            porcgob506 = porcgob506.toFixed(2);
                            
                            ////

                            porcsen69 =  sen69*100/totalVotosInt;
                            porcsen503 = sen503*100/totalVotosInt;
                            porcsen504 = sen504*100/totalVotosInt;
                            porcsen506 = sen506*100/totalVotosInt;

                            porcsen69 =  porcsen69.toFixed(2);
                            porcsen503 = porcsen503.toFixed(2);
                            porcsen504 = porcsen504.toFixed(2);
                            porcsen506 = porcsen506.toFixed(2);
                            
                            ////

                            porcdip69 =  dip69*100/totalVotosInt;
                            porcdip503 = dip503*100/totalVotosInt;
                            porcdip504 = dip504*100/totalVotosInt;
                            porcdip506 = dip506*100/totalVotosInt;

                            porcdip69 =  porcdip69.toFixed(2);
                            porcdip503 = porcdip503.toFixed(2);
                            porcdip504 = porcdip504.toFixed(2);
                            porcdip506 = porcdip506.toFixed(2);
                            
                            ////

                            porcint69 =  int69*100/totalVotosInt;
                            porcint503 = int503*100/totalVotosInt;
                            porcint504 = int504*100/totalVotosInt;
                            porcint506 = int506*100/totalVotosInt;

                            porcint69 =  porcint69.toFixed(2);
                            porcint503 = porcint503.toFixed(2);
                            porcint504 = porcint504.toFixed(2);
                            porcint506 = porcint506.toFixed(2);
                            
                            ////

                            porccon69 =  con69*100/totalVotosInt;
                            porccon503 = con503*100/totalVotosInt;
                            porccon504 = con504*100/totalVotosInt;
                            porccon506 = con506*100/totalVotosInt;

                            porccon69 =  porccon69.toFixed(2);
                            porccon503 = porccon503.toFixed(2);
                            porccon504 = porccon504.toFixed(2);
                            porcint506 = porccon506.toFixed(2);
                            
                            ////

                            /// Tabla Detallada

                            document.getElementById("porcentaje-lista-69").innerHTML = porcint69;




                            document.getElementById("porcentaje-lista-69").value = porcint69;
                            document.getElementById("porcentaje-lista-503").value = porcint503;
                            document.getElementById("porcentaje-lista-504").value = porcint504;
                            document.getElementById("porcentaje-lista-506").value = porcint506;

                            chart2.updateSeries([porcint506]);
                            chart3.updateSeries([porcint503]); 
                            chart4.updateSeries([porcint69]); 
                            chart5.updateSeries([porcint504]);

                            porcVotantes = votantes*100/25461;

                            porcVotantes = porcVotantes.toFixed(2);

                            chart6.updateSeries([porcVotantes]);
                            
                            
                            porcMesasEscrutadas = mesasEscrutadas*100/78;

                            porcMesasEscrutadas = porcMesasEscrutadas.toFixed(2);

                            chart7.updateSeries([porcMesasEscrutadas]);

                            document.getElementById("votantes").innerHTML = votantes+" / "+25461;

                                            
                            document.getElementById("mesasEscrutada").innerHTML = mesasEscrutadas+" / "+78;


                            chart.updateSeries([
                                {
                                    // Frente de todos

                                    data: [porcgob503,porcdip503,porcsen503,porcint503,porccon503]
                                },
                                {   
                                    // Juntos por el Cambio
                                    data: [porcgob506,porcdip506,porcsen506,porcint506,porccon506]
                                },
                                {   
                                    // GEM
                                    data: [porcgob69,porcdip69,porcsen69,porcint69,porccon69]
                                },
                                {   
                                    // Consenso Federal
                                    data: [porcgob504,porcdip504,porcsen504,porcint504,porccon504]
                                }
                                
                        ])
                            

                        });





                }


            });


            porcgob503= 0;porcdip503= 0;porcsen503= 0;porcint503= 0;porccon503= 0;porcgob506= 0;porcdip506= 0;porcsen506= 0;porcint506= 0;porccon506= 0;porcgob69= 0;porcdip69= 0;porcsen69= 0;porcint69= 0;porccon69
                               = 0;porcgob504= 0;porcdip504= 0;porcsen504= 0;porcint504= 0;porccon504=0;



            porcint506= 0;porcint503= 0;porcint69= 0;porcint504= 0;porcVotantes= 0;votantes= 0;porcVotantes= 0;porcVotantes= 0;porcMesasEscrutadas= 0;mesasEscrutadas= 0;porcMesasEscrutadas= 0;porcMesasEscrutadas= 0;

                           ;porcMesasEscrutadas= 0;votantes= 0;

                        });            

        }, 5000);





        //console.log(mesasEscrutadas);


            });
        </script>

    </body>

</html>
