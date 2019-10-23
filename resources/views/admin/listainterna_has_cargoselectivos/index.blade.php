@extends('admin.layouts.layout')

@section('styles')
{{-- third party css --}}
<link href="{{ asset('libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- Custom box css -->
<link href="{{ asset('libs/custombox/custombox.min.css') }}" rel="stylesheet">
{{-- third party css end --}}
@endsection

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
                        <h4 class="page-title">Candidatos</h4>
                    </div>
                </div>
            </div>     
            {{-- end page title  --}}

            @include('admin.listainterna_has_cargoselectivos.fragment.error')

            @if(session('info'))
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert">
                    &times;
                </button>
                {{ session('info') }}
            </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-lg-left mb-3 mt-3 mt-lg-0">
                                    @can('listainternas.create')
                                    <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a">
                                        <i class="mdi mdi-plus-circle mr-1"></i> 
                                        Agregar Candidatos
                                    </a>
                                    @endcan
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
                            <thead class="bg-light">
                            <tr>
                                <th class="font-weight-medium">ID</th>
                                <th class="font-weight-medium">Lista</th>
                                <th class="font-weight-medium">Cargo</th>
                                <th class="font-weight-medium">Candidato</th>
                                <th class="font-weight-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="font-14">
                                @foreach($listainterna_has_cargoselectivos as $listainterna_has_cargoselectivo )

                                @if($listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 7 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 8 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 9
                                    and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 10 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 11 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 12
                                    and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 13 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 14 and $listainterna_has_cargoselectivo->idListInternaHasCargElectivo <> 15)
                                <tr>
                                    <td>
                                        {{ $listainterna_has_cargoselectivo->idListInternaHasCargElectivo }}
                                    </td>

                                    <td>
                                        @can('listainternas.show')

                                        <a href="{{ route('listainterna_has_cargoselectivos.show', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo) }}">

                                        @foreach($listainternasNombres as $listainternasNombre)

                                            @if($listainternasNombre->idListaInterna == $listainterna_has_cargoselectivo->ListaInterna_idListaInterna)


                                                {{ $listainternasNombre->nombre." - ".$listainternasNombre->letra }}

                                            @endif

                                        @endforeach                                           
                                        </a>

                                        @endcan                                               
                                    </td>

                                    <td>
                                        @can('listainternas.show')

                                        <a href="{{ route('listainterna_has_cargoselectivos.show', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo) }}">

                                        @foreach($cargoselectivosNombres as $cargoselectivosNombre)

                                            @if($cargoselectivosNombre->idCargosElectivos == $listainterna_has_cargoselectivo->CargosElectivos_idCargosElectivos)


                                                {{ $cargoselectivosNombre->nombre }}

                                            @endif

                                        @endforeach                                           
                                        </a>

                                        @endcan                                               
                                    </td>

                                        <td>
                                            @can('listainternas.show')

                                            <a href="{{ route('listainterna_has_cargoselectivos.show', $listainterna_has_cargoselectivo->ListaInterna_idListaInterna) }}">

                                                {{ $listainterna_has_cargoselectivo->nombre }}
                                            </a>

                                            @endcan                                               
                                        </td>

                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('listainternas.edit')
                                                <a class="dropdown-item" href="{{ route('listainterna_has_cargoselectivos.edit', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo) }}">
                                                    <i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>
                                                    Editar
                                                </a>
                                                @endcan
                                                @can('listainternas.destroy')
                                                {!! Form::open(['route' => ['listainterna_has_cargoselectivos.destroy', $listainterna_has_cargoselectivo->idListInternaHasCargElectivo],
                                                'method' =>'DELETE']) !!}
                                                    <button class="dropdown-item">
                                                        <i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>
                                                        Eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                                @endcan
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif


                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                {{-- end col --}}
            </div>
            {{-- end row --}}

            {{-- Modal --}}
            <div id="custom-modal" class="modal-demo">
                <button type="button" class="close" onclick="Custombox.modal.close();">
                    <span>&times;</span><span class="sr-only">Cerrar</span>
                </button>
                <h4 class="custom-modal-title">Agregar Candidato</h4>
                <div class="custom-modal-text text-left">
                    {!! Form::open(['route' => 'listainterna_has_cargoselectivos.store']) !!}
                        @csrf
                        @include('admin.listainterna_has_cargoselectivos.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
            
        </div>
        {{-- container --}}

    </div> 
    {{-- content --}}
@endsection

@section('scripts')
{{-- third party js --}}
<script src="{{ asset('libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/datatables/responsive.bootstrap4.min.js') }}"></script>
{{-- Modal-Effect --}}
<script src="{{ asset('libs/custombox/custombox.min.js') }}"></script>
{{-- third party js ends --}}
<script src="{{ asset('js/pages/tickets.js') }}"></script>
@endsection
