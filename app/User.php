<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
<<<<<<< HEAD
    {
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id')->withTimestamps();
=======
        {
            return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id')->withTimestamps();
        }
>>>>>>> fd4dd07c10ab494506b79664ec37a833191aca9f
    }
}
