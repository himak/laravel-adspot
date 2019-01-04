<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(UsersTableSeeder::class);
	    $this->call(AdsTableSeeder::class);
    }


}


class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		factory(App\User::class, 3)->create();
	}

}

class AdsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('ads')->delete();
		factory(App\Ad::class, 10)->create();
	}

}
