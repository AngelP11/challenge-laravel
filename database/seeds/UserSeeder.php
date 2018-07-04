<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 10; $i++) {
            $user = new User([
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'student_id' => $i
            ]);
            $user->save();

            $user->attachRole($faker->numberBetween(1, 2));
        }
    }
}
