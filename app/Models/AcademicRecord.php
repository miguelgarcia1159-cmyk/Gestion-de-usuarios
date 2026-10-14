<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AcademicRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nivel',
        'institucion',
        'programa',
        'anio_inicio',
        'anio_fin',
        'cedula',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}