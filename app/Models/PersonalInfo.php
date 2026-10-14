<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'genero',
        'curp',
        'telefono',
        'direccion',
    ];

    protected function casts(): array
    {
        return [
            'fecha_nacimiento' => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}