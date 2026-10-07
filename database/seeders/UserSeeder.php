<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Data Admin[cite: 1]
        User::create([
            'name' => 'Imam',
            'email' => 'imam@example.com',
            'password' => Hash::make('password123'), // Password wajib di-hash[cite: 1]
            'role' => 'admin',
        ]);

        // Data Mahasiswa[cite: 1]
        User::create([
            'name' => 'Budi',
            'email' => 'budi@example.com',
            'password' => Hash::make('password123'),
            'role' => 'mahasiswa',
        ]);

        // Data Dosen[cite: 1]
        User::create([
            'name' => 'Siti',
            'email' => 'siti@example.com',
            'password' => Hash::make('password123'),
            'role' => 'dosen',
        ]);
    }
}