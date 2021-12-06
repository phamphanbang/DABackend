<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_clusters')->insert([[
            'id' => 1,
            'description' => 'Not a cluster',
            'cluster_max' => 0,
            'cluster_min' => 0
        ],[
            'id' => 2,
            'description' => '3 questions cluster',
            'cluster_max' => 3,
            'cluster_min' => 3
        ],[
            'id' => 3,
            'description' => '4 questions cluster',
            'cluster_max' => 4,
            'cluster_min' => 4
        ],[
            'id' => 4,
            'description' => '5 questions cluster',
            'cluster_max' => 5,
            'cluster_min' => 5
        ],[
            'id' => 5,
            'description' => '2 to 4 questions cluser',
            'cluster_max' => 4,
            'cluster_min' => 2
        ]
        ]);
    }
}
