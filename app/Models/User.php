<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'avatar', 'role'];

    protected $hidden = ['password', 'remember_token'];

    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isPhotographer(): bool
    {
        return $this->role === 'photographer';
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }
}
