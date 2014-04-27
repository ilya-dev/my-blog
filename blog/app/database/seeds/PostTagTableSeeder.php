<?php

use Faker\Factory as Faker;

class PostTagTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        $faker = Faker::create();

        DB::table('post_tag')->truncate();

        $posts = Blog\Post::lists('id');
        $tags = Blog\Tag::lists('id');

		foreach(range(1, 50) as $index)
		{
            DB::table('post_tag')->insert([
                'post_id' => $faker->randomElement($posts),
                'tag_id'  => $faker->randomElement($tags),
			]);
        }

        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id'  => 1,
        ]);
	}

}

