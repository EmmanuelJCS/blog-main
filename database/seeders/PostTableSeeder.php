<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Post;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::truncate();

        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 100; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }


    }
}
