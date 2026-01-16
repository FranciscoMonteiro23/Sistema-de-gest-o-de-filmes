<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'João Silva',
            'email' => 'joao@teste.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Maria Santos',
            'email' => 'maria@teste.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Pedro Costa',
            'email' => 'pedro@teste.com',
            'password' => Hash::make('password')
        ]);
    }
}