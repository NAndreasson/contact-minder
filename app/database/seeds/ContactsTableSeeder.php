<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		Contact::create([
			'firstname' => 'Niklas',
			'lastname' => 'Andréasson'
		]);

		Contact::create([
			'firstname' => 'Peter',
			'lastname' => 'Johnson'
		]);

	}
}