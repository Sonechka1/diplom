<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Closure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static whereHas(string $string, Closure $param)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function isAdmin()
    {
        return $this->role()->where('role', 'admin')->exists();
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isEmployee()
    {
        return $this->role()->where('role', 'employee')->exists();
    }


    public function order()
    {
        return $this->hasMany(Order::class, 'user_id', 'employee_id');
    }


}
