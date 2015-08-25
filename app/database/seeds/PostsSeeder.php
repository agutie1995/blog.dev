<?php

use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		// Post::truncate();

		for ($i = 0; $i<20; $i++){
			$post = new Post();
			$post->title = $faker->catchPhrase;
			$post->body = $faker->text;
			$post->user_id = User::all()->random(1)->id;
			$post->save();
		}
	}
}