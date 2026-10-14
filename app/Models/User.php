<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['name', 'email', 'password', 'role_id'])]
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
        public function personalInfo(): HasOne
    {
        return $this->hasOne(PersonalInfo::class);
    }

    public function institutionalInfo(): HasOne
    {
        return $this->hasOne(InstitutionalInfo::class);
    }

    public function professionalExperiences(): HasMany
    {
        return $this->hasMany(ProfessionalExperience::class);
    }

    public function academicRecords(): HasMany
    {
        return $this->hasMany(AcademicRecord::class);
    }
}