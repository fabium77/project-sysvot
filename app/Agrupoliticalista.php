<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrupoliticalista extends Model
{
    protected $primaryKey = 'idAgrupacionesPoliticas';

    protected $fillable = [
        'nombre', 'numero',
    ];
}
