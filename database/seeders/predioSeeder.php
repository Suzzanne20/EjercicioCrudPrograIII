<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\predio;

class predioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        predio::factory(50)->create();
    }
}
