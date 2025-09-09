<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Customer_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'rfc'=>'DOMJ8501011H0',
            'user_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]); 
         DB::table('customers')->insert([
            'rfc'=>'MAMF8501011H0',
            'user_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]); 
    }
}
