<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Data Admin
        User::firstOrCreate(
            ['email' => 'imam@example.com'], // Parameter 1: Kriteria pencarian
            [
                'name' => 'Imam',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ] // Parameter 2: Data yang diisi jika user belum ada
        );

        // Data Mahasiswa
        User::firstOrCreate(
            ['email' => 'budi@example.com'],
            [
                'name' => 'Budi',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ]
        );

        // Data Dosen
        User::firstOrCreate(
            ['email' => 'siti@example.com'],
            [
                'name' => 'Siti',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
            ]
        );
    }
}