<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = true;

    public function Products(){
        return $this->belongsToMany(Product::class);
    }

    //metodo para agregar datos a tabla pivot
    public function attachProducts($product_id){
        $this->products()->attach($product_id);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
