<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Articles::truncate();
        \App\Models\Articles::unguard();

        $faker = \Faker\Factory::create();

        \App\Models\User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                \App\Models\Articles::create([
                    'user_id' => $user->id,
                    'title'   => $faker->sentence,
                    'content' => $faker->paragraphs(3, true),
                ]);
            }
        });
    }
}
