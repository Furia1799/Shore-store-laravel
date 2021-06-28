<?php

namespace Database\Seeders;

use App\Models\User;
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
            'password' => bcrypt('12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alberto',
            'last_name' => 'Ruelas',
            'email' => 'Alberto@gmail.com',
            'password' => bcrypt('secret'),

        ]);

    }
}
