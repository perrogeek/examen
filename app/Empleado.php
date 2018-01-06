<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birthday'
    ];

    public function domicilios()
    {
        return $this->hasMany(Domicilio::class);
    }

    public function fullname()
    {
        return $this->first_name .' '. $this->last_name;
    }
}
