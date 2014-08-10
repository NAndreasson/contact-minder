<?php

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$contactNiklas = Contact::create([
			'firstname' => 'Niklas',
			'lastname' => 'Andréasson'
		]);

		ContactData::create([
			'contact_id' => $contactNiklas->id,
			'type' => 'twitter',
			'value' => 'AndreassonN'
		]);

		ContactData::create([
			'contact_id' => $contactNiklas->id,
			'type' => 'email',
			'value' => 'niklas@nandreasson.se'
		]);


		$contactPeter = Contact::create([
			'firstname' => 'Peter',
			'lastname' => 'Johnson'
		]);

		ContactData::create([
			'contact_id' => $contactPeter->id,
			'type' => 'email',
			'value' => 'peter@johnson.com' 
		]);

		Contact::create([
			'firstname' => 'Anna',
			'lastname' => 'Sundström'
		]);

	}
}