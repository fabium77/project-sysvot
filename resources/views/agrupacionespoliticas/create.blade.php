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
 
                    @include('agrupacionespoliticas.fragment.error')      
                    {!! Form::open(['route' => 'agrupacionespoliticas.store']) !!}

                        @include('agrupacionespoliticas.partials.form')

                    {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
