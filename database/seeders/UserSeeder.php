<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Pham Phan Bang',
            'email' => 'phamphanbang@gmail.com',
            'avatar' => 'default.jpg',
            'password' => '123456789',
            'phone' => '0795000748',
            'birthday' => Carbon::parse('25-07-1999'),
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Nguyen Viet Cuong',
            'email' => 'nguyenvietcuong@gmail.com',
            'avatar' => 'default.jpg',
            'password' => '123456789',
            'phone' => '0795000001',
            'birthday' => Carbon::parse('01-02-1999'),
            'created_at' => Carbon::now(),
        ]]);
    }
}
