<div class="form-group">
    {{ Form::label('numero', 'Numero') }}
    {{ Form::number('numero', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('CantidadElectores', 'Cantidad de Electores') }}
        {{ Form::number('CantidadElectores', null, ['class' => 'form-control']) }}
</div>

    {{ Form::hidden('idMesasUpdate', $mesa->idMesas, ['class' => 'form-control']) }}




  
<hr>


<h3>Escuela</h3>

<div class="form-group">
    


    {!! Form::select('Escuelas_idEscuelas', $escuelas, old('Escuelas_idEscuelas'), ['class' => 'form-control', 'required']) !!}
            


</div>

<div class="form-group">
        <div class="text-right">
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary waves-effect waves-light']) }}
        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">
            Cancelar
        </button>
        </div>
    </div>
