<?php

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
        DB::table('users')->truncate();

        Blog\User::create([
            'email'    => 'foo@bar.com',
            'password' => Hash::make('password'),
        ]);
	}

}

