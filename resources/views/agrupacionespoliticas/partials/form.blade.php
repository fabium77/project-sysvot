<div class="form-group">
        {{ Form::label('nombre', 'Nombre del partido') }}
        {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('numero', 'Numero') }}
        {{ Form::number('numero', null, ['class' => 'form-control']) }}
</div>


    <hr>

    <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    
    </div>
