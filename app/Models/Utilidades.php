<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utilidades extends Model
{
    use HasFactory;
    protected $table = 'utilidades';

    protected $fillable = [
        'monto_total',
        'id_propuesta',
    ];

    public function propuestas():HasMany
    {
        return $this->hasMany(propuestas::class, 'id', 'id_propuesta');
    }
}
