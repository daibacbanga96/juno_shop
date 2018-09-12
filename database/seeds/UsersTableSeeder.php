<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'user_name' => $faker->name,
                'user_email' => $faker->unique()->email,
                'password'=>bcrypt('123456'),
                'user_phone' => $faker->phoneNumber,
                'user_avatar'=>$faker->randomElement(['ava1.png','ava2.png','ava3.png']),
                'user_level'=> $faker->numberBetween($min = 2, $max = 3),
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                 'updated_at' => new DateTime,
                 
            ]);
        }
    }
}
