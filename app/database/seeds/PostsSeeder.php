<?php

use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();

		Post::truncate();

		for ($i = 0; $i<20; $i++){
			$post = new Post();
			$post->title = $faker->catchPhrase;
			$post->body = $faker->bs;
			$post->save();
		}

		// $post = new Post();
		// $post->title = 'My First Post';
		// $post->body = 'This is my first post for my Laravel blog';
		// $post->save();

		// $post1 = new Post();
		// $post1->title = 'Dear Diary...';
		// $post1->body = 'Don\'t you hate it when you put files in the wrong folder?';
		// $post1->save();

		// $post2 = new Post();
		// $post2->title  = 'Blah, blahblah, blahblah';
		// $post2->body = 'Blaaaaahhh';
		// $post2->save();
	}
}