<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todolists=['Ekmek','Şeker','Peynir','Salam','Yumurta','Yoğurt','Sucuk','Mayonez','Pirinç','Sabun','Su','Cips','Reçel','Peçete','Çekirdek'];
        foreach($todolists as $todolist){
            DB::table('todo_lists')->insert([
                'user_id'=>'2',
                'name'=>$todolist,
            ]);
        }
        foreach($todolists as $todolist){
            DB::table('todo_lists')->insert([
                'user_id'=>'3',
                'name'=>$todolist,
            ]);
        }
    }
}
