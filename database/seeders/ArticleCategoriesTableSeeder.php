<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ArticleCategory::factory(5)->create()->each(function($category) {
            $category->articles()->saveMany(
                \App\Models\Article::factory(rand(0, 5))->make()
            );
        });
    }
}
