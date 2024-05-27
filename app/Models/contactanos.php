<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactanos extends Model
{
    use HasFactory;

    protected $table = 'contactanos';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'mensaje',
    ];
}
