<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Users__seed;
use Database\Seeders\Zone_seed;
use Database\Seeders\Customer_seed;
use Database\Seeders\Architects_seed;
use Database\Seeders\Projects__seed;
use Database\Seeders\Architectural_Drawings_seed;
use Database\Seeders\Reviews_seed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Users__seed::class,
            Zone_seed::class,
            Customer_seed::class,
            Architects_seed::class,
            Projects__seed::class,
            Architectural_Drawings_seed::class,
            Reviews_seed::class,
        ]);
    }
}
