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
                            <input type="hidden" name="_method" value="PUT">
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

    
    
    <div class="tab-pane" id="gem">
        <div id="gemForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">

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

</div> 
{{-- tab-content --}}

