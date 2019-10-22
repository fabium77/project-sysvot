<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargoselectivo extends Model
{
    protected $primaryKey = 'idCircuitos';

    protected $fillable = [
        'nombre', 'numero', 'Secciones_idSecciones'
    ];
}
