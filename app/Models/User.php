<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //eliminar update_at y create_at
    public $timestamps = false;

    //uno a muchos
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_user');
    }


}
