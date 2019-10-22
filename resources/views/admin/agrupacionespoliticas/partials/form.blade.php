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
	<div class="text-right">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
	<button type="button"  class="btn btn-danger waves-effect waves-light m-l-10">
		Cancelar
	</button>
	
	</div>
</div>
