<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * We'll truncate  todos table 
         * before filling it woth dummy data
         */
        Todo::truncate();

        $faker = \Faker\Factory::create();

        /**
         * We'll fill todos table 
         * with dummy data
         */
        for ($i = 0; $i < 50; $i++) {
            Todo::create([
                'body' => $faker->sentence,
                'done' => false,
            ]);
        }
    }
}
