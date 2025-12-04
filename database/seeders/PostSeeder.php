<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 10; $i++) :
            $posts = [
                'title' => $faker->realText(20),
                'slug' => $faker->slug(),
                'excerpt' => $faker->paragraph(10),
                'thumbnail' => $faker->imageUrl(1000, 600),
                'content'   => $faker->text(30),
                'user_id' => $faker->numberBetween(1, 5),
                'category_id' => $faker->numberBetween(1, 5),
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'views' => $faker->numberBetween(50, 4000)
            ];
            DB::table("posts")->insert($posts);
        endfor;
    }
}
