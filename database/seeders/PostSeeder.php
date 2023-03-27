<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 11; $i++) { 
            $title = $faker->unique()->sentence(5);
            Post::Create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $faker->paragraph(),
            ]);
        }
    }
}
