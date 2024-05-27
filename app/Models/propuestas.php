<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class propuestas extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    protected $fillable = [
        'nombre',
        'tipo',
        'id_user',
        'descripcion',
        'estado',
        'monto',
        'documento',
    ];

    public function utilidadForPropuesta():BelongsTo
    {
        return $this->belongsTo(Utilidades::class, 'id_propuesta', 'id');
    }
    public function userFromPropuesta():BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}