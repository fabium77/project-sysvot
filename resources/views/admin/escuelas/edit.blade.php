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
                        <h4 class="page-title">Editar {{ $title }}</h4>
                    </div>
                </div>
            </div>     
            {{-- end page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="card-body">
                                @include('admin.escuelas.fragment.error')
                                {!! Form::model($escuela, ['route' => ['escuelas.update', $escuela->idEscuelas],
                                'method' => 'PUT']) !!}
                                    @include('admin.escuelas.partials.form')
                                {!! Form::close() !!}                            
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

@endsection
