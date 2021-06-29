<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    //eliminar update_at y create_at
    public $timestamps = false;

    //uno a uno

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    //muchos a muchos

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(){
       /* return $this->belongsToMany(Category::class,'categories_products','id_category',
            'id_product');*/
        return $this->belongsToMany(Category::class);
    }

    //muchos a muchos

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(User::class);
    }
}
