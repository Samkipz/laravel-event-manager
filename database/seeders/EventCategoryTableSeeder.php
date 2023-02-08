<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventCategoryTableSeeder extends Seeder
{
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
//        Category::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few event categories in our database:
        for ($i = 0; $i < 4; $i++) {
            Category::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
