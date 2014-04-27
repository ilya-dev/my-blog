<?php

class PostsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        Blog\Post::create([
            'title'    =>  'My First Post',
            'content'  =>  'Very Useful Content',
        ]);
	}

}

