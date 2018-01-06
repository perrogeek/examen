<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected  $fillable = [
        'alias',
        'direccion',
        'empleado_id',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
