<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'company_id','correo','telefono'
    ];
}
