<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bryan',
            'last_name' => 'Reyes',
            'email' => 'furia1799@gmail.com',
            'password' => '12345',
            'rol' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto',
            'last_name' => 'Ruelas',
            'email' => 'Alberto@gmail.com',
            'password' => '12345',
            'rol' => 'admin',
        ]);

        $array = range(1,20);
        foreach($array as $valor){
            $rol= '';
            $randon = rand(1,2);

            if($randon == 1){
                $rol = 'admin';
            }else{
                $rol = 'cliente';
            }

            DB::table('users')->insert([
                'name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Str::random(5),
                'rol' => $rol,
            ]);
        }
    }
}
