<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zone_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zone')->insert([
            'name' => 'Norte',
            'created_at' => date('Y-m-d h:m:s')
        ]);
        DB::table('zone')->insert([
            'name' => 'Sur',
            'created_at' => date('Y-m-d h:m:s')
        ]);
        DB::table('zone')->insert([
            'name' => 'Este',
            'created_at' => date('Y-m-d h:m:s')
        ]);
        DB::table('zone')->insert([
            'name' => 'Oeste',
            'created_at' => date('Y-m-d h:m:s')
        ]);
    }
}
