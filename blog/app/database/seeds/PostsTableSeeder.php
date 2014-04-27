<?php

class PostsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        DB::table('posts')->truncate();

        $posts =
        [
            [
                'title'    =>  'My First Post',
                'content'  =>  'Very Useful Content',
            ],
            [
                'title'    =>  'Another Cool Post',
                'content'  =>  'Some Cool Content',
            ],
        ];

        \array_map(['Blog\Post', 'create'], $posts);
	}

}

