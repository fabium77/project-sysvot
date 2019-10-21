<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('numero', 'Numero') }}
    {{ Form::text('numero', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('letra', 'letra') }}
    {{ Form::text('letra', null, ['class' => 'form-control', 'maxlength' => '1']) }}
</div>
    
<hr>



<h3>Agrupaciones politicas</h3>

<div class="form-group">
    


    {!! Form::select('AgrupacionesPoliticas_idAgrupacionesPoliticas', $agrupacionespoliticas, old('AgrupacionesPoliticas_idAgrupacionesPoliticas'), ['class' => 'form-control', 'required']) !!}
            


</div>

<div class="form-group">
        <div class="text-right">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
            Cancelar
        </button>
        </div>
    </div>
    