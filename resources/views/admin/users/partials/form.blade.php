<div class="form-group">
	{{ Form::label('name', 'Nombre del usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>



<hr>

<h3>Lista de roles</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $role)
        <li>
            <label>
                {{ Form::checkbox('roles[]', $role->id, null) }}
                {{ $role->name }}
                <em>({{ $role->description ?: 'Sin Descripcion' }})</em>
            </label>
    	</li>
        @endforeach
    </ul>
</div>


<h3>Mesa</h3>

<hr>


<div class="form-group">
	{{ Form::label('numero', 'Numero de mesa') }}
	{{ Form::number('numero', null, ['class' => 'form-control']) }}
</div>


<div class="form-group">
	<div class="text-right">
		{{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
		<button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
			Cancelar
		</button>
	</div>
</div>
    