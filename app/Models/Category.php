<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    //eliminar update_at y create_at
    public $timestamps = false;

    //muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class);

    }


}
