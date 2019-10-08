@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Agrupacion Politica
                </div>

                <div class="card-body">
                   
                    {!! Form::model($agrupacionespolitica, ['route' => ['agrupacionespoliticas.update', $agrupacionespolitica->idAgrupacionesPoliticas],
                    'method' => 'PUT']) !!}

                        @include('agrupacionespoliticas.partials.form')

                    {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection