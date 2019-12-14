@extends('admin.layouts.layout') @section('content')

<div class="content-page">
    <div class="content">
        {{-- Start Content --}}
        <div class="container-fluid">
            {{-- start page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Resultado de Escrutinio de Mesa</h4>
                    </div>
                </div>
            </div>
            {{-- end page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="card-body">
                                <p>
                                    <strong class="font-weight-bold">
                                        Numero:
                                    </strong>
                                    {{ $mesa->numero }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Escuela:
                                    </strong>

                                    {{ $escuelas }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Creacion:
                                    </strong>
                                    {{ $mesa->created_at->format('d/m/Y H:i')
                                    }}Hs.
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Modificacion:
                                    </strong>
                                    @if ($mesa->updated_at == $mesa->created_at)
                                    No posee Modificaciones @else
                                    {{ $mesa->updated_at->diffForHumans() }}
                                    @endif
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Cargada:
                                    </strong>

                                    @if ( $mesa->cargado == 1 ) Si @else No
                                    @endif
                                </p>

                                <p>
                                        <strong class="font-weight-bold">
                                            Cargada Por:
                                        </strong>

                                        @foreach ($usuariocarga as $item)
                                            
                                            <a href="{{ route('users.show', $item->usuario) }}">{{$item->name}}</a>
                                        @endforeach

                                        
                                    </p>

                                <p>
                                    <strong class="font-weight-bold">
                                        Cantidad de Electores:
                                    </strong>
                                    @foreach ($cantelectores as $item)
                                    {{$item->CantidadElectores}}
                                    @endforeach
                                </p>
                                
                                <p></p>

                                <br />
                                @if ($mesa->cargado == 1)
                                {{-- -----------------------------
                                    TABLA--------------------------- --}}

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">
                                                Agrupacion Politica
                                            </th>
                                            <th scope="col">Presidente</th>
                                            <th scope="col">
                                                Diputado Nacional
                                            </th>
                                            <th scope="col">Gobernador Prov</th>
                                            <th scope="col">Diputado Prov</th>
                                            <th scope="col">Senador Prov</th>
                                            <th scope="col">Intendente Mun</th>
                                            <th scope="col">Concejal Mun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listas as $item)
                                        <tr>
                                            <td>
                                                {{$item->numero}}
                                            </td>

                                            <td>
                                                {{$item->nombre}}
                                               
                                            </td>
                                                
                                            <td>
                                                @foreach ($datos as $dato)

                                                    @if ($dato->Numero == $item->numero)

                                                    
                                                            @if ($dato->nombre == "Presidente")

                                                                {{ $dato->voto }}
                                                                
                                                            @endif
                                                        
                                                    @endif
                                                    
                                                @endforeach
                                            </td>

                                            <td>
                                                    @foreach ($datos as $dato)
    
                                                        @if ($dato->Numero == $item->numero)
    
                                                        
                                                                @if ($dato->nombre == "DiputadoN")
    
                                                                    {{ $dato->voto }}
                                                                    
                                                                @endif
                                                            
                                                        @endif
                                                        
                                                    @endforeach
                                                </td>

                                                <td>
                                                        @foreach ($datos as $dato)
        
                                                            @if ($dato->Numero == $item->numero)
        
                                                            
                                                                    @if ($dato->nombre == "Gobernador")
        
                                                                        {{ $dato->voto }}
                                                                        
                                                                    @endif
                                                                
                                                            @endif
                                                            
                                                        @endforeach
                                                    </td>

                                                    <td>
                                                        @foreach ($datos as $dato)
            
                                                            @if ($dato->Numero == $item->numero)

                                                                @if ($dato->nombre == "Diputado")
            
                                                                    {{ $dato->voto }}
                                                                            
                                                                @endif
                                                                    
                                                            @endif
                                                                
                                                        @endforeach
                                                    </td>

                                                    <td>
                                                            @foreach ($datos as $dato)
                
                                                                @if ($dato->Numero == $item->numero)
    
                                                                    @if ($dato->nombre == "Senador")
                
                                                                        {{ $dato->voto }}
                                                                                
                                                                    @endif
                                                                        
                                                                @endif
                                                                    
                                                            @endforeach
                                                    </td>

                                                    <td>
                                                            @foreach ($datos as $dato)
                
                                                                @if ($dato->Numero == $item->numero)
    
                                                                    @if ($dato->nombre == "Intendecia")
                
                                                                        {{ $dato->voto }}
                                                                                
                                                                    @endif
                                                                        
                                                                @endif
                                                                    
                                                            @endforeach
                                                    </td>

                                                    <td>
                                                            @foreach ($datos as $dato)
                
                                                                @if ($dato->Numero == $item->numero)
    
                                                                    @if ($dato->nombre == "Concejal")
                
                                                                        {{ $dato->voto }}
                                                                                
                                                                    @endif
                                                                        
                                                                @endif
                                                                    
                                                            @endforeach
                                                    </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                @else @endif
                            </div>
                            
                        </div>
                        {{-- end row --}}
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="card-body">
                                            <div class="card-widgets">
                                                    <a href="javascript: void(0);" data-toggle="reload">
                                                        <i class="mdi mdi-refresh"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#piechart_3d" role="button" aria-expanded="false" aria-controls="cardCollpase5">
                                                        <i class="mdi mdi-minus"></i>
                                                    </a>
                                                    <a href="javascript: void(0);" data-toggle="remove">
                                                        <i class="mdi mdi-close"></i>
                                                    </a>
                                                </div>
                                            <h4 class="header-title mb-0">Gráfico Gobernador</h4>
                                        <div class="text-center" id="piechart_3d" style="width: 700px; height: 400px; margin: 0 auto; "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <div class="mt-4 mb-3">
                        <div class="text-center d-print-none">
                            <a
                                href="javascript:window.print()"
                                class="btn btn-primary waves-effect waves-light"
                                ><i class="mdi mdi-printer mr-1"></i>
                                Imprimir</a
                            >
                        </div>
                    </div>
                    {{-- end card-box --}}
                </div>
                {{-- end col --}}
            </div>
            {{-- end row --}}




                {{-- end col --}}
            </div>
        </div>
        {{-- container --}}
    </div>
    {{-- content --}}
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Votos', 'Gobernador'],
            @foreach ($gob as $item)
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
