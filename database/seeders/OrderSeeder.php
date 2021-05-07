<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar una a la vez
        DB::table('orders')->insert([
            'id_user' => 1,
            'id_direction' => 1,
            'cost' => 4500,
            'status' => 'En proceso',
            'date' => '21-05-06 10:00:00',
        ]);
    }
}
