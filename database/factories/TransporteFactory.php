<?php

namespace Database\Factories;

use App\Models\Transporte;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transporte>
 */
class TransporteFactory extends Factory
{

    protected $transporte = Transporte::class;
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name,
            'razon_social'=> $this->faker->text(12),
        ];
    }
}
