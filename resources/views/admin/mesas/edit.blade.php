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
                                @include('admin.mesas.fragment.error')
                                {!! Form::model($mesa, ['route' => ['mesas.update', $mesa->idMesas],
                                'method' => 'PUT']) !!}
                                    @include('admin.mesas.partials.form')
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
