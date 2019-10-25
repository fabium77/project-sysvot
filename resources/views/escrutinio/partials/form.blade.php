<div class="tab-content mb-0 b-0">
    
    <div class="tab-pane" id="mesa">
        <div id="mesaForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row mb-3">
                        {{ Form::label('mesa', 'N° de mesa', ['class' => 'col-md-3 col-form-label']) }}
                        {{-- <label class="col-md-3 col-form-label" for="mesa">N° de mesa</label> --}}
                        <div class="col-md-9">
                            {{ Form::number('mesa', null, ['class' => 'form-control']) }}
                            {{-- <input type="number" class="form-control" id="mesa" name="mesa" required> --}}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('votos', 'Cantidad votos emitidos', ['class' => 'col-md-3 col-form-label']) }}
                        {{-- <label class="col-md-3 col-form-label" for="votos"> Cantidad votos emitidos</label> --}}
                        <div class="col-md-9">
                            {{ Form::number('votos', null, ['class' => 'form-control']) }}
                            {{-- <input type="number" id="votos" name="votos" class="form-control" required> --}}
                        </div>
                    </div>
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
                    <div class="form-group row mb-3">
                        {{ Form::label('gobGem', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}
                        {{-- <label class="col-md-3 col-form-label" for="gobernador">Gobernador</label> --}}
                        <div class="col-md-9">
                            {{ Form::number('gobGem', null, ['class' => 'form-control']) }}
                            {{-- <input type="number" class="form-control" id="gobernador" name="gobernador" required> --}}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('dipGem', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('dipGem', null, ['class' => 'form-control']) }}
                        </div>
                        {{-- <label class="col-md-3 col-form-label" for="diputados"> Diputados</label>
                        <div class="col-md-9">
                            <input type="number" id="diputados" name="diputados" class="form-control" required>
                        </div> --}}
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('senGem', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('senGem', null, ['class' => 'form-control']) }}
                        </div>
                        {{-- <label class="col-md-3 col-form-label" for="senadores"> Senadores</label>
                        <div class="col-md-9">
                            <input type="number" id="senadores" name="senadores" class="form-control" required>
                        </div> --}}
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('intGem', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('intGem', null, ['class' => 'form-control']) }}
                        </div>
                        {{-- <label class="col-md-3 col-form-label" for="intendente"> Intendente</label>
                        <div class="col-md-9">
                            <input type="number" id="intendente" name="intendente" class="form-control" required>
                        </div> --}}
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('conGem', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('conGem', null, ['class' => 'form-control']) }}
                        </div>
                        {{-- <label class="col-md-3 col-form-label" for="concejales"> Concejales</label>
                        <div class="col-md-9">
                            <input type="number" id="concejales" name="concejales" class="form-control" required>
                        </div> --}}
                    </div>
                </div> 
                {{-- end col --}}
            </div> 
            {{-- end row --}}
        </div>
    </div>

    <div class="tab-pane fade" id="cf">
        <div id="cfForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row mb-3">
                        {{ Form::label('gobCF', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('gobCF', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('dipCF', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('dipCF', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('senCF', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('senCF', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('intCF', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('intCF', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('conCF', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('conCF', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
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

    <div class="tab-pane fade" id="ft">
        <div id="ftForm" class="form-horizontal">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row mb-3">
                        {{ Form::label('gobFT', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('gobFT', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('dipFT', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('dipFT', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('senFT', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('senFT', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('intFT', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('intFT', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('conFT', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('conFT', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
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
                    <div class="form-group row mb-3">
                        {{ Form::label('gobJPC', 'Gobernador', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('gobJPC', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('dipJPC', 'Diputados', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('dipJPC', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('senJPC', 'Senadores', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('senJPC', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('intJPC', 'Intendente', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('intJPC', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        {{ Form::label('conJPC', 'Concejales', ['class' => 'col-md-3 col-form-label']) }}
                        <div class="col-md-9">
                            {{ Form::number('conJPC', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
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
                                {{ Form::submit('Registrar', ['class' => 'btn btn-success waves-effect waves-light']) }}
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

    <ul class="list-inline wizard mb-0">
        <li class="previous list-inline-item">
            <a href="javascript: void(0);" class="btn btn-secondary">Previo</a>
        </li>
        <li class="next list-inline-item float-right">
            <a href="javascript: void(0);" class="btn btn-secondary">Siguiente</a>
        </li>
    </ul>

</div> 
    {{-- tab-content --}}