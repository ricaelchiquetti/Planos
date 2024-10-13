<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanosClientes>
 */
class PlanosClientesFactory extends Factory
{

    protected $model = PlanoCliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->word() . ' Plano', // Nome do plano
            'valor' => fake()->randomFloat(2, 10, 100), // Valor entre 10 e 100
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
