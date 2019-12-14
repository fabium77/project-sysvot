<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escrutinio extends Model
{
    //

    protected $primaryKey = 'idEscrutinios';

    protected $fillable = [
        'Comicios_has_Mesas', 'ListaInter_has_CargosElectivos', 'voto', 'usuario', 
    ];
    
}
