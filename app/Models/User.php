<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use Notifiable;
    use HasRoles;

    /**
     * Les attributs assignables en masse.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'is_active',
        'two_factor_enabled',
        'last_login_at',
        'enterprise_id',
    ];

    /**
     * Les attributs masqués lors de la sérialisation.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les conversions de types.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at'   => 'datetime',
            'password'            => 'hashed',
            'last_login_at'       => 'datetime',
            'two_factor_enabled'  => 'boolean',
            'is_active'           => 'boolean',
        ];
    }

    /**
     * Vérifie si le compte est actif.
     */
    public function isActive(): bool
    {
        return (bool) $this->is_active;
    }

    /**
     * Vérifie si le compte est inactif.
     */
    public function isInactive(): bool
    {
        return ! $this->isActive();
    }

    /**
     * Relation avec l'entreprise.
     */
    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }
}