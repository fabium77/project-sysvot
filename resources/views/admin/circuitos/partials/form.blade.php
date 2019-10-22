<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>

    
<hr>



<h3>Provincia</h3>

<div class="form-group">
    


    {!! Form::select('Provincias_idProvincias', $secciones, old('Provincias_idProvincias'), ['class' => 'form-control', 'required']) !!}
            


</div>

<div class="form-group">
        <div class="text-right">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
            Cancelar
        </button>
        </div>
    </div>
    