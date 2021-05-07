<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Niños',
        ]);

        //insertar datos masivos
        $array = range(1,20);

        foreach($array as $valor){
            DB::table('categories')->insert([
                'name' => Str::random(10),
            ]);
        }
    }
}
