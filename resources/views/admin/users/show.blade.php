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
                        <h4 class="page-title">Usuario</h4>
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
                                    {{ $user->name }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Email:
                                    </strong>
                                    {{ $user->email }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Rol:
                                    </strong>
                                    @foreach($roles as $role)

                                    {{ $role->name }}
                                    <br>
                                    <br>
                                    <strong class="font-weight-bold">
                                        Descripción:
                                    </strong>
                                    {{ $role->description }}

                                    @endforeach

                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Creacion:
                                    </strong>
                                    {{ $user->created_at->diffForhumans() }}
                                </p>
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

