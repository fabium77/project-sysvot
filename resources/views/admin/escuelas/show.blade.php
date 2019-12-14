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
                                    {{ $escuela->nombre }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Numero:
                                    </strong>
                                    {{ $escuela->direccion }}
                                </p>

                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14031.171024867894!2d-65.724503!3d-28.4556631!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa39f43fad1258825!2sEscuela%20N%C2%B0%20366%20Provincia%20de%20La%20Pampa!5e0!3m2!1ses-419!2sar!4v1575788648433!5m2!1ses-419!2sar" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> --}}


                                <p>
                                    <strong class="font-weight-bold">
                                        Direccion:
                                    </strong>

                                    {{ $circuitos }}

                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Creacion:
                                    </strong>
                                    {{ $escuela->created_at }}
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
