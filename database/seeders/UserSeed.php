<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

        // Créer le superutilisateur principal

        for ($i = 0; $i < 50; $i++) {
            $superUser = User::create([
                'name' => $faker->name() ,
                'email' => $faker->unique()->safeEmail(),
                'password' =>  Hash::make('password'),
                'created_at' => now(),
            ]);
        }
    }
}
