<?php

namespace App\Models;

<<<<<<< HEAD
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> origin/FajarAngga
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'role'
=======
        'role',
>>>>>>> origin/FajarAngga
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be cast.
=======
     * Get the attributes that should be cast.
>>>>>>> origin/FajarAngga
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
<<<<<<< HEAD

    /**
     * Scope a query to only include staff users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStaff($query)
    {
        return $query->where('role', 'staf');
    }
    
=======
>>>>>>> origin/FajarAngga
}
