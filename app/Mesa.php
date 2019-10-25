<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $primaryKey = 'idMesas';

    protected $fillable = [
        'numero', 'Escuelas_idEscuelas',
    ];

    public function comicios() {
        return $this->belongsToMany('App\Comicio');
    }

    public function comicios_has_mesas() {
        return $this->belongsToMany('App\Comicios_has_mesa');
    }


}
