<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(5)->create();
        $this->command->info('Таблица категорий загружена данными!');

        Brand::factory()->count(5)->create();
        $this->command->info('Таблица брендов загружена данными!');

        Product::factory()->count(5)->create();
        $this->command->info('Таблица товаров загружена данными!');
    }
}
