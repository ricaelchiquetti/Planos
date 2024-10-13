<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlanosClientes::factory()->create([
            'name' => 'Básico',
            'valor' => 29.90,
        ]);

        PlanosClientes::factory()->create([
            'name' => 'Intermediário',
            'valor' => 49.90,
        ]);

        PlanosClientes::factory()->create([
            'name' => 'Premium',
            'valor' => 99.90,
        ]);
    }
}
