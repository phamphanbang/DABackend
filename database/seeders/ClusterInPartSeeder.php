<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClusterInPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cluster_in_part')->insert([[
            'part_id' => 1,
            'cluster_id' => 1,
            'quantity' =>0
        ],[
            'part_id' => 2,
            'cluster_id' => 1,
            'quantity' =>0
        ],[
            'part_id' => 3,
            'cluster_id' => 2,
            'quantity' =>13
        ],[
            'part_id' => 4,
            'cluster_id' => 2,
            'quantity' =>10
        ],[
            'part_id' => 5,
            'cluster_id' => 1,
            'quantity' =>0
        ],[
            'part_id' => 6,
            'cluster_id' => 3,
            'quantity' =>4
        ],[
            'part_id' => 7,
            'cluster_id' => 5,
            'quantity' =>10
        ],[
            'part_id' => 8,
            'cluster_id' => 4,
            'quantity' =>5
        ]
        ]);
    }
}
