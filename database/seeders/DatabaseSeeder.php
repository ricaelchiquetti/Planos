<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@planos.com',
            'password' => Hash::make('123')
        ]);

        User::factory()->create([
            'name' => 'Tester',
            'email' => 'test@planos.com',
        ]);

    }
}
