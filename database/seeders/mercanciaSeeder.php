<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mercancia;

class predioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mercancia::factory(50)->create();
    }
}
