<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
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
            'usertype' => 'admin',
            'phone' => '9999',
            'password' => Hash::make('admin')
        ]);
        User::factory()->create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'usertype' => 'members',
            'phone' => '9999',
            'password' => Hash::make('member')
        ]);

        Category::create([
            'name' => 'Buah'
        ]);
        Category::create([
            'name' => 'Minuman'
        ]);

        Product::create([
            'name' => 'Mangga',
            'price' => 15000,
            'photo' => '',
            'dsc' => 'Ini Mangga',
            'category_id' => '1'
        ]);
        Product::create([
            'name' => 'Melon',
            'price' => 12000,
            'photo' => '',
            'dsc' => 'Ini Melon',
            'category_id' => '2'
        ]);
    }
}
