<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrupacionespolitica extends Model
{
    protected $primaryKey = 'idAgrupacionesPoliticas';

    protected $fillable = [
        'nombre', 'numero',
    ];

}
