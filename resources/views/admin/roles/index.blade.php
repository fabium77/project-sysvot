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
                        <h4 class="page-title">Roles</h4>
                    </div>
                </div>
            </div>     
            {{-- end page title  --}}

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
                                    @can('roles.create')
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable" data-animation="fadein" data-overlayColor="#38414a">
                                        <i class="mdi mdi-plus-circle mr-1"></i> 
                                        Agregar Nuevo
                                    </button>
                                    @endcan
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
                            <thead class="bg-light">
                            <tr>
                                <th class="font-weight-medium">ID</th>
                                <th class="font-weight-medium">Nombre</th>
                                <th class="font-weight-medium">Acciones</th>
                            </tr>
                            </thead>
                            <tbody class="font-14">
                                @foreach($roles as $rol)
                                <tr>
                                    <td>
                                        {{ $rol->id }}
                                    </td>
                                    <td>
                                        @can('roles.show')
                                        <a href="{{ route('roles.show', $rol->id) }}">
                                            {{ $rol->name }}
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @can('users.edit')
                                                <a class="dropdown-item" href="{{ route('roles.edit', $rol->id) }}">
                                                    <i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>
                                                    Editar
                                                </a>
                                                @endcan
                                                @can('roles.destroy')
                                                {!! Form::open(['route' => ['users.destroy', $rol->id],
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
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header custom-modal-title">
                            <h4 class="modal-title" id="exampleModalScrollableTitle">Agregar Rol</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['route' => 'roles.store']) !!}
                                @csrf
                                @include('admin.roles.partials.form')
                            {{-- {!! Form::close() !!} --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" data-dismiss="modal">
                                Cancelar
                            </button>
                            {{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
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
<script src="{{ asset('js/app.min.js') }}"></script>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}"
                         class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                    @endcan
                </div>

                <div class="card-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Role</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                    <td>{{ $role->id}}</td>
                                    <td>{{ $role->name}}</td>
                                    <td width="10px">
                                        @can('roles.show')
                                            <a href="{{ route('roles.show', $role->id) }}"
                                                class="btn btn-sm btn-default"> Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('roles.edit')
                                            <a href="{{ route('roles.edit', $role->id) }}"
                                                class="btn btn-sm btn-default"> Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('roles.destroy')
                                         {!! Form::open(['route' => ['roles.destroy', $role->id],
                                         'method' =>'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger"> Eliminar </button>
                                         {!! Form::close() !!}
                                        @endcan
                                    </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $roles->render() }}



                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
