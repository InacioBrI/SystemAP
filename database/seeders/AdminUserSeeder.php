<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@BelasArtes.com',
            'password' => bcrypt('Belas@123'), // Você pode mudar esta senha
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
    }
}
