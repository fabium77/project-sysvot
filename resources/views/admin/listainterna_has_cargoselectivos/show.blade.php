@extends('admin.layouts.layout')
@section('content')

<div class="content-page">
    <div class="content">
        {{-- Start Content --}}
        <div class="container-fluid">
            {{-- start page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Candidatos</h4>
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
                                        Candidato: 
                                    </strong>

                                
                                 {{  $listainterna_has_cargoselectivo->nombre    }}
                                 <br>
                                
                                 <strong class="font-weight-bold">
                                    Cargo Politico: 
                                </strong>
                                
                                    @foreach ($cargoselectivos as $cargo)

                                    @if ($listainterna_has_cargoselectivo->CargosElectivos_idCargosElectivos  == $cargo->idCargosElectivos)

                                    {{$cargo->nombre}}

                                    @endif

                                 @endforeach
                                
                                 

                                 
                                 
                                
                                     


                                

                                   


                                </p>
                                {{-- <p>
                                    <strong class="font-weight-bold">
                                        Escuela:
                                    </strong>

                                    {{ $escuelas }}

                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Creacion:
                                    </strong>
                                    {{ $mesa->created_at }}
                                </p> --}}
                            </div>
                        </div>
                        {{-- end row --}}
                    </div>
                    {{-- end card-box --}}
                </div>
                {{-- end col --}}
            </div>
            {{-- end row --}}
        </div>
        {{-- container --}}
    </div>
    {{-- content --}}
</div>
    
@endsection
