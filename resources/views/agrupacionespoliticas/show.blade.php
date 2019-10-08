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
                    <p>
                        <strong>
                            Nombre
                        </strong>
                        {{ $agrupacionespolitica->nombre }}
                    </p>
                    <p>
                        <strong>
                            Numero
                        </strong>
                        {{ $agrupacionespolitica->numero }}
                    </p>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection