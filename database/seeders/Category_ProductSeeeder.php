<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Category_ProductSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_products')->insert([
            'id_category' => 1,
            'id_product' => 1,
        ]);

        //insertar datos masivos
        $array = range(1,20);

        foreach($array as $valor){
            DB::table('categories_products')->insert([
                'id_category' => rand(1,6),
                'id_product' => rand(1,20),
            ]);
        }
    }
}
