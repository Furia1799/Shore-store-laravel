<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    //uno a muchos
    public function orders()
    {
        return $this->hasMany(Order::class,'id_direction');
    }

}
