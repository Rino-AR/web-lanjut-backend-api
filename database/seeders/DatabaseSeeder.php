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
        Product::firstOrCreate([
            'name' => 'Laptop',
            'price' => 8500000,
            'stock' => 10,
        ]);

        Product::firstOrCreate([
            'name' => 'Mouse',
            'price' => 150000,
            'stock' => 25,
        ]);

        Product::firstOrCreate([
            'name' => 'Keyboard',
            'price' => 450000,
            'stock' => 15,
        ]);
    }
}
