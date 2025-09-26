<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate first 10 Users
        \App\Models\Author::factory(10)->create();

        // And then 20 articles
        \App\Models\Article::factory(20)->create();

        // And 30 sold products
        \App\Models\Productsold::factory(30)->create();

        // 30 product category
        \App\models\Productcategory::factory(30)->create();
    }

}
