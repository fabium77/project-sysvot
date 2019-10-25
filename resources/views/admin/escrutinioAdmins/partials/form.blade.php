<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>

  
<hr>

<h3>Lista</h3>

<div class="form-group">
    
        {!! Form::select('ListaInterna_idListaInterna', $listainternas, old('ListaInterna_idListaInterna'), ['class' => 'form-control', 'required']) !!}

</div>

<hr>

<h3>Cargo</h3>

<div class="form-group">
    
        {!! Form::select('CargosElectivos_idCargosElectivos', $cargoselectivos, old('CargosElectivos_idCargosElectivos'), ['class' => 'form-control', 'required']) !!}

</div>

<div class="form-group">
        <div class="text-right">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
            Cancelar
        </button>
        </div>
    </div>
