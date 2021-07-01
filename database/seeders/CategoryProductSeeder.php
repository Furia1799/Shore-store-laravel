<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tabla pivot
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 10,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 5,
        ]);
        DB::table('category_product')->insert([
            'category_id' => '3',
            'product_id' => '20',
        ]);
    }
}
