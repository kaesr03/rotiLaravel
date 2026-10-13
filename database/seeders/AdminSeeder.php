<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@tokoroti.com'],
            [
                'name' => 'Admin Toko Roti Pt.Betzbread ',
                'password' => Hash::make('password123'),
            ]
        );

        Category::create(['name' => 'Roti Tawar']);
        Category::create(['name' => 'Roti Gandum']);
        Category::create(['name' => 'Roti Manis']);

        Product::create([
            'category_id' => 1,
            'code' => 'RC-001',
            'name' => 'Roti Coklat',
            'unit' => 'pcs',
            'stock' => 25,
            'minimum_stock' => 10,
        ]);
    }
}
