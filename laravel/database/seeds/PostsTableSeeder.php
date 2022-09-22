<?php

use App\Category;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        $categories = Category::all();

        for ($i=0; $i < 100; $i++) { 
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->category_id = $faker->randomElement($categories)->id;
            $newPost->title = $faker->realText(35);
            $newPost->date = $faker->dateTimeThisYear();
            $newPost->img = $faker->imageUrl();
            $newPost->content = $faker->paragraph(5, false);
            $newPost->save();
        }
    }
}
