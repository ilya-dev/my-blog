<?php

use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
        $faker = Faker::create();

        DB::table('tags')->truncate();

        $tags = [
            [
                'name' => 'programming',
            ],
        ];

		foreach (range(1, 50) as $element)
		{
			$tags[] = [
                'name' => $faker->word,
			];
        }

        foreach ($tags as $tag)
        {
            try
            {
                Blog\Tag::create($tag);
            }
            catch (Illuminate\Database\QueryException $exception)
            {

            }
        }
	}

}

