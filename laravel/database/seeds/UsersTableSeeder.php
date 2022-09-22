<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = 'Alessio Calabrese';
        $user->email = 'xernas4316@gmail.com';
        $user->password = Hash::make('Alex4316!');
        $user->save();
        for ($i=0; $i < 20; $i++) { 
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->unique()->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->save();
        }
    }
}
