<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();
        // Create an instance of faker.
        $faker = Faker::create();
        $contacts = [];
        // Make an array of 20 contacts with faker.
        foreach (range(1, 500) as $index)
        {
        	$contacts[] = [
        		'group_id' => rand(1, 3),
        		'name' => $faker->name,
        		'company' => $faker->company,
        		'email' => $faker->email,
        		'phone' => $faker->phoneNumber,
        		'address' => "{$faker->streetName} {$faker->postCode} {$faker->city}",
                'about' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        		'created_at' => new DateTime,
        		'updated_at' => new DateTime,
        	];
        }
        // Insert into database.
        DB::table('contacts')->insert($contacts);




    }
}
