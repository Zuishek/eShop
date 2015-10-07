<?php
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();
		User::create(array(
                       'email' => 'member@email.com',
                       'password' => Hash::make('password'),
                       'name' => 'Ahmed Walid',
                       'admin' => 0
			           ));

		User::create(array(
			           'email' => 'admin@shop.com',
			           'password' => Hash::make('adminpassword'),
			           'name' => 'Mohamed El-Alfy',
			           'admin' => 1
			           ));
	}
}