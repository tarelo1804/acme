<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Architects_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architects')->insert([
            'professional_certificate'=>'1234567890',
            'user_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]); 
         DB::table('architects')->insert([
            'professional_certificate'=>'0987654321',
            'user_id'=>2,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
