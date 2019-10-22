<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listainterna extends Model
{
    protected $primaryKey = 'idListaInterna';

    protected $fillable = [
        'nombre', 'numero','AgrupacionesPoliticas_idAgrupacionesPoliticas', 'letra'
    ];
}
