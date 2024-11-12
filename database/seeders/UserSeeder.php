<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;  // Import DB class
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->address,
            'password' => bcrypt('password'), 
            'age' => $faker->numberBetween(18, 99),
            'province_id' => $faker->state,
            'dicstrict_id' => $faker->word,
            'ward_id' => $faker->word,
            'image' => $faker->imageUrl(),
            'birthday' => $faker->dateTimeThisCentury->format('Y-m-d H:i:s'),
            'email_verified_at' => $faker->boolean ? now() : null, 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
