<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = [
            'sport',
            'videogame',
            'music',
            'php',
            'html',
            'laravel',
            'js'
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->color = $faker->hexColor();
            $newCategory->save();
        }
    }
}
