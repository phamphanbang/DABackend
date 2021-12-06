<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeOfTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_tests')->insert([[
            'name' => 'listening',
            'description' => 'Listening description'
        ],[
            'name' => 'reading',
            'description' => 'Reading description'
        ]]);
    }
}
