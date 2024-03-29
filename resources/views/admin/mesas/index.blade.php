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
                        <h4 class="page-title">Mesas</h4>
                    </div>
                </div>
            </div>     
            {{-- end page title  --}}

            @include('admin.mesas.fragment.error')

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
                                    @can('mesas.create')
                                    <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a">
                                        <i class="mdi mdi-plus-circle mr-1"></i> 
                                        Agregar Mesa
                                    </a>
                                    @endcan
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
                            <thead class="bg-light">
                            <tr>
                                <th class="font-weight-medium">Estado</th>
                                <th class="font-weight-medium">Numero</th>
                                <th class="font-weight-medium">Escuela</th>
                                <th class="font-weight-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="font-14">
                                @foreach($mesas as $mesa)
                                <tr>
                                    <td>
                                        {{-- {{ $ultimo = $mesa->idMesas }} --}}

                                        @if ( $mesa->cargado == 1 )
                                        {{-- {{ $ultimo = $mesa->idMesas }} --}}
                                        
                                        
                                     
                                        <i style="color:green; font-size:20px" class="remixicon-checkbox-circle-fill"></i>
                                        
                                        @else
                                       
                                        <i style="color:red; font-size:20px" class="remixicon-close-circle-fill"></i>
                                      
                                        @endif

                                        </td>




                                    <td>
                                        @can('mesas.show')
                                        <a href="{{ route('mesas.show', $mesa->idMesas) }}">
                                            {{ $mesa->numero }}
                                        </a>
                                        @endcan
                                            
                                        </td>
                                        <td>
                                            @can('mesas.show')

                                            <a href="{{ route('mesas.show', $mesa->idMesas) }}">

                                            @foreach($escuelasNombres as $escuelasNombre)

                                                @if($escuelasNombre->idEscuelas == $mesa->Escuelas_idEscuelas)


                                                    {{ $escuelasNombre->nombre }}

                                                @endif

                                            @endforeach                                           
                                            </a>

                                            @endcan                                               
                                        </td>



                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('mesas.edit')
                                                <a class="dropdown-item" href="{{ route('mesas.edit', $mesa->idMesas) }}">
                                                    <i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>
                                                    Editar
                                                </a>
                                                @endcan
                                                @can('mesas.destroy')
                                                {!! Form::open(['route' => ['mesas.destroy', $mesa->idMesas],
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
                <h4 class="custom-modal-title">Agregar Mesa</h4>
                <div class="custom-modal-text text-left">
                    {!! Form::open(['route' => 'mesas.store']) !!}
                        @csrf
                        @include('admin.mesas.partials.form')
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
