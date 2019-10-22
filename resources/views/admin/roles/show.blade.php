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
                            <h4 class="page-title">Detalle del Rol</h4>
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
                                            Nombre: 
                                        </strong>
                                        {{ $role->name }}
                                    </p>
                                    <p>
                                        <strong class="font-weight-bold">
                                            Slug: 
                                        </strong>
                                        {{ $role->slug }}
                                    </p>
                                    <p>
                                        <strong class="font-weight-bold">
                                            Descripcion:
                                        </strong>
                                        {{ $role->description }}
                                    </p>                                                                    
                                </div>
                            </div>
                            {{-- end row --}}
    
                            
                        </div> 
                        <div class="mt-4 mb-1">
                            <div class="text-center d-print-none">
                                <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Imprimir</a>
                            </div>
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
    
@endsection