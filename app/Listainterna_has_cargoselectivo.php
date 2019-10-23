<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listainterna_has_cargoselectivo extends Model
{
    protected $primaryKey = 'idListInternaHasCargElectivo';

    protected $fillable = [
        'ListaInterna_idListaInterna', 'CargosElectivos_idCargosElectivos', 'nombre',
    ];


}
