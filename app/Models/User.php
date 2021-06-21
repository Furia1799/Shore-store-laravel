<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//
use Illuminate\Contracts\Auth\Authenticatable;



class User extends Model implements Authenticatable
{
    use HasFactory;
    //eliminar update_at y create_at
    public $timestamps = false;

    //uno a muchos
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_user');
    }


    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
