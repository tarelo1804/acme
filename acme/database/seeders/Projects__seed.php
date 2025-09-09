<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Projects__seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'name' => 'Project Alpha',
            'description' => 'Description for Project Alpha',
            'start_date' =>'2025-01-01',
            'delivery_date' =>'2025-06-01',
            'zone_id' => 1,
            'customer_id' => 1,
            'architect_id' => 1,
            'created_at' => date('Y-m-d h:m:s')
        ]);
        DB::table('projects')->insert([
            'name' => 'Project Beta',
            'description' => 'Description for Project Beta',
            'start_date' =>'2025-02-02',
            'delivery_date' =>'2025-09-02',
            'zone_id' => 2,
            'customer_id' => 2,
            'architect_id' => 2,
            'created_at' => date('Y-m-d h:m:s')
        ]);
    }
}
