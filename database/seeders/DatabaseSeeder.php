<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'is_active' => true,
            'role' => 'admin'
        ]);

        // Create one user record for User
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'is_active' => true,
            'role' => 'user'
        ]);

        // Create one user record for Pembantu
        User::factory()->create([
            'name' => 'Pembantu',
            'email' => 'pembantu@gmail.com',
            'password' => Hash::make('password'),
            'is_active' => true,
            'role' => 'pembantu'
        ]);
    // );
    }
}
