<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        // Tambahkan data dummy Produk
        Product::create([
            'name' => 'Laptop',
            'price' => 8500000,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Mouse',
            'price' => 150000,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Keyboard',
            'price' => 450000,
            'stock' => 15,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
