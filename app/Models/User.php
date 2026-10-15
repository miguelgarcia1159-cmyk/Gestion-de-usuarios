<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    #[Fillable(['name', 'email', 'password', 'role_id'])]
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * Relación con el rol del usuario
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}