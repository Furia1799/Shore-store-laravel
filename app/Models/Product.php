<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

   /* public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }*/

    //uno a muchos
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    //muchos a muchos
    public function categories(){
        return $this->belongsToMany(Category::class,'categories_products','id_category',
            'id_product');
    }

    //muchos a muchos
    public function orders()
    {
        return $this->belongsToMany(User::class);
    }
}
