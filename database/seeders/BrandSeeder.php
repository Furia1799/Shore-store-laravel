<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insertar una a la vez
        DB::table('brands')->insert([
            'name' => 'Nike',
        ]);

        //insertar datos masivos
        $array = range(1,20);

        foreach($array as $valor){
            DB::table('brands')->insert([
                'name' => Str::random(10),

            ]);
        }
    }
}
