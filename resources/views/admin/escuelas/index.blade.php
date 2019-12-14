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
                        <h4 class="page-title">Escuelas</h4>
                    </div>
                </div>
            </div>     
            {{-- end page title  --}}

            @include('admin.escuelas.fragment.error')

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
                                    @can('escuelas.create')
                                    <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a">
                                        <i class="mdi mdi-plus-circle mr-1"></i> 
                                        Agregar Escuela
                                    </a>
                                    @endcan
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
                            <thead class="bg-light">
                            <tr>
                                <th class="font-weight-medium">ID</th>
                                <th class="font-weight-medium">Nombre</th>
                                <th class="font-weight-medium">Direccion</th>
                                <th class="font-weight-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="font-14">
                                @foreach($escuelas as $escuela)
                                <tr>
                                    <td>
                                        {{ $escuela->idEscuelas }}
                                    </td>
                                    <td>
                                        @can('escuelas.show')
                                        <a href="{{ route('escuelas.show', $escuela->idEscuelas) }}">
                                            {{ $escuela->nombre }}
                                        </a>
                                        @endcan
                                            
                                        </td>
                                        <td>
                                            @can('escuelas.show')
                                            <a href="{{ route('escuelas.show', $escuela->idEscuelas) }}">
                                                {{ $escuela->direccion }}
                                            </a>
                                            @endcan
                                                
                                            </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('escuelas.edit')
                                                <a class="dropdown-item" href="{{ route('escuelas.edit', $escuela->idEscuelas) }}">
                                                    <i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>
                                                    Editar
                                                </a>
                                                @endcan
                                                @can('escuelas.destroy')
                                                {!! Form::open(['route' => ['escuelas.destroy', $escuela->idEscuelas],
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
                <h4 class="custom-modal-title">Agregar Escuela</h4>
                <div class="custom-modal-text text-left">
                    {!! Form::open(['route' => 'escuelas.store']) !!}
                        @csrf
                        @include('admin.escuelas.partials.form')
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
