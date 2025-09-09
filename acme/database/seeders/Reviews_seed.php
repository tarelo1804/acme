<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reviews_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'drawing_id'=>'1',
            'architect_id'=>'1',
            'comment'=>'Error en el plano en la parte de la ventana, corrige',
            'review_date'=>date('Y-m-d'),
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
        DB::table('reviews')->insert([
            'drawing_id'=>'2',
            'architect_id'=>'1',
            'comment'=>'Excelente trabajo',
            'review_date'=>'2025-10-10',
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
