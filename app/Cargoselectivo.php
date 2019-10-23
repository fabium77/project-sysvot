<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargoselectivo extends Model
{
    protected $primaryKey = 'idCargosElectivos';

    protected $fillable = [
        'nombre', 'Comicios_idComicios', 'TiposCargosElectivos_idTiposCargosElectivos'
    ];
}
