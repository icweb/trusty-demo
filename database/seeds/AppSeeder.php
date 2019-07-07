<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'John Smith',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $faker = Faker::create();

        foreach(range(1,20) as $_)
        {
            \App\User::create([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'email' => $faker->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
