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
        $data = [
            'user_name' => 'Trương Bình',
            'user_email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'user_avatar' => '',
            'user_phone'  => '0123456789',
            'user_level'=> '1',
            'remember_token' => str_random(10),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ];

        DB::table('users')->insert($data);
    }
}
