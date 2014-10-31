<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([
                'title' => $faker->sentence($nbWords = 4),
                'body' => $faker->paragraph($nbSentences = 3),
                'location' => $faker->streetAddress,
                'user_id' => $faker->numberBetween(1,11),
                'board_id' => $faker->numberBetween(1,11),
			]);
		}
	}

}
