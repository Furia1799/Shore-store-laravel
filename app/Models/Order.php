<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //eliminar update_at y create_at
    public $timestamps = false;

    //uno a muchos
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    //uno a muchos
    public function direction()
    {
        return $this->belongsTo(Direction::class,'id_direction');
    }

    //muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class,'orders_products','id_product',
            'id_order')->withPivot('units');
    }
}
