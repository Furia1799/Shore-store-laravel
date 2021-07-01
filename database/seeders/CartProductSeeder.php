<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_product')->insert([
            'cart_id' => 1,
            'product_id' => 10,
        ]);

        DB::table('cart_product')->insert([
            'cart_id' => 1,
            'product_id' => 5,
        ]);

        DB::table('cart_product')->insert([
            'cart_id' => 2,
            'product_id' => 5,
        ]);
    }
}
