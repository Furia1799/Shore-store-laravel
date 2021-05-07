<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
            'country' => 'Mexico',
            'provincia' => 'Jalisco',
            'city' => 'El salto',
            'address' => 'Narcizo Menza #50',
        ]);

        //insertar datos masivos
        $array = range(1,20);

        foreach($array as $valor){
            DB::table('directions')->insert([
                'country' => Str::random(10),
                'provincia' => Str::random(10),
                'city' => Str::random(10),
                'address' => Str::random(10),
            ]);
        }
    }
}
