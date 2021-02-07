<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jobs::truncate();
        \App\Models\Jobs::unguard();

        $faker = \Faker\Factory::create();


        \App\Models\User::all()->each(function ($user) use($faker){
            foreach(range(1,5) as $i){
                \App\Models\Jobs::create([
                    'user_id'=>$user->getKey(),
                    'title'=>$faker->sentence
                ]);
            }
        });
    }
}
