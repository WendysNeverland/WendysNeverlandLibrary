<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
<<<<<<< HEAD
    {
        return $this->belongsToMany('App\User', 'user_role', 'user_id', 'role_id')->withTimestamps();
=======
        {
            return $this->belongsToMany('App\User', 'user_role', 'user_id', 'role_id')->withTimestamps();
        }
>>>>>>> fd4dd07c10ab494506b79664ec37a833191aca9f
    }
}
