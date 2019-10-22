<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $primaryKey = 'idEscuelas';

    protected $fillable = [
        'nombre', 'direccion','Circuitos_idCircuitos',
    ];
}
