<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    //eliminar update_at y create_at
    public $timestamps = false;

    //uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class, 'id_brand');
    }
}
