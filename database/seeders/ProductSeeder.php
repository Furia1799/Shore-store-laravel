<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar una a la vez
        DB::table('products')->insert([
            'id_category' => 1,
            'id_brand' => 1,
            'name' => 'Adidas predator',
            'unit' => 100,
            'description' => 'adiadas predatos con una gran suela de aire ',
            'price' => 1000,
            'Stock' => 100,
            'image' => 'sin imagen',
        ]);
    }
}
