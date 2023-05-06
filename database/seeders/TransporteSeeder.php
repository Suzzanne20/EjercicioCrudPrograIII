<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{

    public function run(): void
    {
        Transporte::factory(50)->create();
    }
}
