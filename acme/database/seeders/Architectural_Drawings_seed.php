<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Architectural_Drawings_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architectural_drawings')->insert([
            'name'=>'Plano Estructural 1',
            'description'=>'Primer plano estructural del proyecto',
            'drawing_file'=>'plano_estructural_1.pdf',
            'project_id'=>'1',
            'version'=>'1',
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
        DB::table('architectural_drawings')->insert([
            'name'=>'Plano Arquitectonico 1',
            'description'=>'Primer plano arquitectonico del proyecto',
            'drawing_file'=>'plano_arquitectonico_1.pdf',
            'project_id'=>'2',
            'version'=>'3',
            'created_at'=>date('Y-m-d h:m:s')//2025-12-12
        ]);
    }
}
