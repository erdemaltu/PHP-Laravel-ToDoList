<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'Erdem',
                'email' => 'erdem@gmail.com',
                'password' => Hash::make('12345678'),
                'utype'=>'admin',
            ],
            [
                'name' => 'Sinan',
                'email' => 'sinan@gmail.com',
                'password' => Hash::make('12345678'),
                'utype'=>'user',
            ],
            [
                'name' => 'Osman',
                'email' => 'osman@gmail.com',
                'password' => Hash::make('12345678'),
                'utype'=>'user',
            ]
        ]);
    }
}
