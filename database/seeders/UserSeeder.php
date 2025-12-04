<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'username' => $faker->username(),
                'photo' => $faker->imageUrl(100, 100),
                'email' => $faker->safeEmail(),
                'password' => Hash::make('pass123')
            ]);
        }
    }
}
