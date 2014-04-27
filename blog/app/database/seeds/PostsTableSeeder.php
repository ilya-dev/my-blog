<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        $faker = Faker::create();

        DB::table('posts')->truncate();

        $posts = [
            [
                'title'   => 'My First Post',
                'content' => 'Very Useful Content',
            ],
        ];

        foreach (range(1, 50) as $index)
        {
            $posts[] = [
                'title'   => $faker->sentence,
                'content' => $faker->paragraph,
            ];
        }

        \array_map(['Blog\Post', 'create'], $posts);
	}

}

