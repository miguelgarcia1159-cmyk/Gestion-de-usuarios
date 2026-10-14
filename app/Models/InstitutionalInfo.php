<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstitutionalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo',
        'codigo',
        'departamento',
        'fecha_ingreso',
        'grado_maximo',
        'categoria',
        'nivel_sni',
        'puesto',
        'area',
    ];

    protected function casts(): array
    {
        return [
            'fecha_ingreso' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}