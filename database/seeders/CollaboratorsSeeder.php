<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CollaboratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemplos de colaboradores
        $collaborators = [
            [
                'name' => 'João Silva',
                'email' => 'joao@systemap.com',
                'password' => bcrypt('colab123'),
                'role' => 'collaborator',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@systemap.com',
                'password' => bcrypt('colab123'),
                'role' => 'collaborator',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Pedro Oliveira',
                'email' => 'pedro@systemap.com',
                'password' => bcrypt('colab123'),
                'role' => 'collaborator',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($collaborators as $collaborator) {
            User::create($collaborator);
        }
    }
}
