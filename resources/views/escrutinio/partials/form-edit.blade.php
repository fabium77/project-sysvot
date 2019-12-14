{{ Form::hidden('usuario', Auth::user()->id) }}

<div class="tab-content mb-0 b-0">
    
    <div class="tab-pane" id="mesa">
        <div id="mesaForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row mb-3">
                        {{ Form::label('mesa', 'N° de mesa', ['class' => 'col-md-3 col-form-label']) }}
                        {{-- <label class="col-md-3 col-form-label" for="mesa">N° de mesa</label> --}}
                        <div class="col-md-9">
                            {{ Form::text('mesa', $numeroMesa, ['class' => 'form-control','disabled' => 'disabled']) }}
                            {{-- <input type="number" class="form-control" id="mesa" name="mesa" required> --}}
                        </div>
                    </div>

                    @foreach ($cantelectores as $item)
                               
                               <div class="form-group row mb-3">
                                {{ Form::label('votos', 'Cantidad votos emitidos', ['class' => 'col-md-3 col-form-label']) }}
                                {{-- <label class="col-md-3 col-form-label" for="votos"> Cantidad votos emitidos</label> --}}
                                <div class="col-md-9">
                                    {{ Form::number('votos',  $item->CantidadElectores, ['class' => 'form-control']) }}
        
                                   
                                </div>
                            </div>
                            @break
                    @endforeach


                    
                </div> 
                {{-- end col --}}
            </div> 
            {{-- end row --}}
        </div>
    </div>

    {{-- @foreach ($cargos as $item)
       {{$item->nombre}}
    @endforeach --}}

    
    
    <div class="tab-pane" id="gem">
        <div id="gemForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    
                    {{-- <div class="form-group row mb-3">
                        {{ Form::label('1', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}

                        <div class="col-md-9">
                            {{ Form::number('1', null, ['class' => 'form-control']) }}
                        </div>
                    </div> --}}

                    @foreach ($datos as $item)
                        @if ($item->ListaInterna == 'GEM')
                            <div class="form-group row mb-3">
                                {{ Form::label($item->listainterhascarg, $item->nombre, ['class' => 'col-md-3 col-form-label']) }}
                                <div class="col-md-9">
                                    {{ Form::number($item->listainterhascarg, $item->voto, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        @endif
                    @endforeach


                    {{-- <div class="form-group row mb-3">
                        {{ Form::label('2', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('2', null, ['class' => 'form-control']) }}
                        </div>
                       
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('3', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('3', null, ['class' => 'form-control']) }}
                        </div>
                        
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('4', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('4', null, ['class' => 'form-control']) }}
                        </div>
                        
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('5', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('5', null, ['class' => 'form-control']) }}
                        </div>
                        
                    </div> --}}


                </div> 
                {{-- end col --}}
            </div> 
            {{-- end row --}}
        </div>
    </div>

    <div class="tab-pane fade" id="ft">
        <div id="ftForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    @foreach ($datos as $item)
                        @if ($item->ListaInterna == 'Frente de Todos')
                            <div class="form-group row mb-3">
                                {{ Form::label($item->listainterhascarg, $item->nombre, ['class' => 'col-md-3 col-form-label']) }}
                                <div class="col-md-9">
                                    {{ Form::number($item->listainterhascarg, $item->voto, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> 
                {{-- end col --}}
                {{-- <div class="col-12">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                        <div class="col-md-9">
                            <input type="number" id="diputados" name="diputados" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                        <div class="col-md-9">
                            <input type="number" id="senadores" name="senadores" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                        <div class="col-md-9">
                            <input type="number" id="intendente" name="intendente" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                        <div class="col-md-9">
                            <input type="number" id="concejales" name="concejales" class="form-control" required>
                        </div>
                    </div>
                </div> <!-- end col --> --}}
            </div>
            {{-- end row --}}
        </div>
    </div>

    <div class="tab-pane fade" id="cf">
        <div id="cfForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    @foreach ($datos as $item)
                    @if ($item->ListaInterna == 'Consenso Federal')
                        <div class="form-group row mb-3">
                            {{ Form::label($item->listainterhascarg, $item->nombre, ['class' => 'col-md-3 col-form-label']) }}
                            <div class="col-md-9">
                                {{ Form::number($item->listainterhascarg, $item->voto, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    @endif
                @endforeach
                </div> 
                {{-- end col --}}
                {{-- <div class="col-12">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                        <div class="col-md-9">
                            <input type="number" id="diputados" name="diputados" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                        <div class="col-md-9">
                            <input type="number" id="senadores" name="senadores" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                        <div class="col-md-9">
                            <input type="number" id="intendente" name="intendente" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                        <div class="col-md-9">
                            <input type="number" id="concejales" name="concejales" class="form-control" required>
                        </div>
                    </div>
                </div> <!-- end col --> --}}
            </div> 
            {{-- end row --}}
        </div>
    </div>

    <div class="tab-pane fade" id="jpc">
        <div id="jpcForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    @foreach ($datos as $item)
                    @if ($item->ListaInterna == 'Juntos por el Cambio')
                        <div class="form-group row mb-3">
                            {{ Form::label($item->listainterhascarg, $item->nombre, ['class' => 'col-md-3 col-form-label']) }}
                            <div class="col-md-9">
                                {{ Form::number($item->listainterhascarg, $item->voto, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div> 
                {{-- end col --}}
                {{-- <div class="col-12">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="gobernador" name="gobernador" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                        <div class="col-md-9">
                            <input type="number" id="diputados" name="diputados" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                        <div class="col-md-9">
                            <input type="number" id="senadores" name="senadores" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                        <div class="col-md-9">
                            <input type="number" id="intendente" name="intendente" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                        <div class="col-md-9">
                            <input type="number" id="concejales" name="concejales" class="form-control" required>
                        </div>
                    </div>
                </div> <!-- end col --> --}}
            </div> 
            {{-- end row --}}
        </div>
    </div>

    <div class="tab-pane fade" id="fin">
        <div id="finForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="mt-0">
                            <i class="mdi mdi-check-all"></i>
                        </h2>
                        <h3 class="mt-0">Desea enviar los datos?</h3>
        
                        <p class="w-75 mb-2 mx-auto">Una vez enviados no podrá modificarlos.</p>
        
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                {{ Form::submit('Actualizar Datos', ['class' => 'btn btn-success waves-effect waves-light']) }}
                                {{-- <input type="submit" class="btn btn-success" value="Enviar"> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end col --}}
            </div>
            {{-- end row --}}
        </div>
    </div>

    {{-- <ul class="list-inline wizard mb-0">
        <li class="previous list-inline-item">
            <a href="javascript: void(0);" class="btn btn-secondary">Previo</a>
        </li>
        <li class="next list-inline-item float-right">
            <a href="javascript: void(0);" class="btn btn-secondary">Siguiente</a>
        </li>
    </ul> --}}

</div> 
{{-- tab-content --}}

{{-- @foreach ($listas as $lista)
    <div class="tab-pane fade" id="{{ $lista->numero }}{{ $lista->letra }}">
        <div id="{{ $lista->numero }}{{ $lista->letra }}Form" class="form-horizontal"> --}}
            {{-- <div class="row">
                <div class="col-12">
                    <div class="form-group row mb-3">
                        {{ Form::label('gob$lista->numero$lista->letra', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('gob{!! $lista->numero !!}{!! $lista->letra !!}', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('dip{!! $lista->numero !!}{!! $lista->letra !!}', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('dip{!! $lista->numero !!}{!! $lista->letra !!}', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('sen{!! $lista->numero !!}{!! $lista->letra !!}', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('sen{!! $lista->numero !!}{!! $lista->letra !!}', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('int{!! $lista->numero !!}{!! $lista->letra !!}', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('int{!! $lista->numero !!}{!! $lista->letra !!}', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('con{!! $lista->numero !!}{!! $lista->letra !!}', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('con{!! $lista->numero !!}{!! $lista->letra !!}', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                </div> 
            </div>  --}}
            {{-- 1
        </div>
    </div>
@endforeach --}}
