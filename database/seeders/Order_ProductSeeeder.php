<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_ProductSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_products')->insert([
            'id_order' => 1,
            'id_product' => 1,
            'units'=> 2
        ]);

        //insertar datos masivos
        $array = range(1,20);

        foreach($array as $valor){
            DB::table('orders_products')->insert([
                'id_order' => rand(1,20),
                'id_product' => rand(1,20),
                'units'=> 1
            ]);
        }
    }
}
