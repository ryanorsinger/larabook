<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

        $this->makeMyselfAUser();
        $this->makeFakeUsers();
	}

    protected function makeMyselfAUser()
    {
        $user = new User;
        $user->email = $_ENV['USER_EMAIL'];
        $user->username = $_ENV['USER_USERNAME'];
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->first_name = $_ENV['USER_FIRSTNAME'];
        $user->last_name = $_ENV['USER_LASTNAME'];
        $user->save();
        return true;
    }

    protected function makeFakeUsers()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            User::create([
            'email' => $faker->safeEmail,
            'username' => $faker->userName,
            'password' => $faker->password,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            ]);
        }
    }
}
