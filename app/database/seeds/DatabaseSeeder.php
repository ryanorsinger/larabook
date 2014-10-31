<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');

		$this->call('BoardsTableSeeder');

		$this->call('PostsTableSeeder');

		// $this->call('GroupsTableSeeder');

		// $this->call('TagsTableSeeder');

	}

}
