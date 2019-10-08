@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Agrupaciones Politicas
                    @can('agrupacionespoliticas.create')
                        <a href="{{ route('agrupacionespoliticas.create') }}"
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
                                <th>Nombre</th>
                                <th>Numero</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agrupacionespoliticas as $agrupacionespolitica)
                            <tr>
                                    <td>{{ $agrupacionespolitica->idAgrupacionesPoliticas}}</td>
                                    <td>{{ $agrupacionespolitica->nombre}}</td>
                                    <td>{{ $agrupacionespolitica->numero}}</td>
                                    <td width="10px">
                                        @can('agrupacionespoliticas.show')
                                            <a href="{{ route('agrupacionespoliticas.show', $agrupacionespolitica->idAgrupacionesPoliticas) }}"
                                                class="btn btn-sm btn-default"> Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('agrupacionespoliticas.edit')
                                            <a href="{{ route('agrupacionespoliticas.edit', $agrupacionespolitica->idAgrupacionesPoliticas) }}"
                                                class="btn btn-sm btn-default"> Editar
                                            </a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('agrupacionespoliticas.destroy')
                                         {!! Form::open(['route' => ['agrupacionespoliticas.destroy', $agrupacionespolitica->idAgrupacionesPoliticas],
                                         'method' =>'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger"> Eliminar </button>
                                         {!! Form::close() !!}
                                        @endcan
                                    </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $agrupacionespoliticas->render() }}



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
