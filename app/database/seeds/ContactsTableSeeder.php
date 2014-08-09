<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		Contact::create([
			'firstname' => 'Niklas',
			'lastname' => 'Andréasson',
			'twitter' => 'AndreassonN',
			'email' => 'niklas@nandreasson.se'
		]);

		Contact::create([
			'firstname' => 'Peter',
			'lastname' => 'Johnson',
			'email' => 'peter@johnson.com'
		]);

		Contact::create([
			'firstname' => 'Anna',
			'lastname' => 'Sundström'
		]);

	}
}