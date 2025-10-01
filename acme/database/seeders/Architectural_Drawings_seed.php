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
        $now = now();

        // Crear un archivo PDF de ejemplo
        $samplePdfPath = public_path('drawings/plano_ejemplo.pdf');
        if (!file_exists($samplePdfPath)) {
            $pdf = fopen($samplePdfPath, 'w');
            fwrite($pdf, '%PDF-1.4' . PHP_EOL . '%%EOF');
            fclose($pdf);
        }
        
        DB::table('architectural_drawings')->insert([
            'name' => 'Plano Estructural 1',
            'description' => 'Primer plano estructural del proyecto',
            'file_path' => 'plano_ejemplo.pdf',
            'project_id' => 1,
            'version' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        
        DB::table('architectural_drawings')->insert([
            'name' => 'Plano Arquitectonico 1',
            'description' => 'Primer plano arquitectonico del proyecto',
            'file_path' => 'plano_ejemplo.pdf',
            'project_id' => 2,
            'version' => 3,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
