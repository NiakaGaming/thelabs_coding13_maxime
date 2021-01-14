<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'last_name' => "Ishigame",
                'first_name' => "Niaka",
                'role_id' => 4,
                'email' => "niaka@hotmail.com",
                'password' => Hash::make("niaka@hotmail.com"),
            ],
            [
                'last_name' => "VdB",
                'first_name' => "Max",
                'role_id' => 3,
                'email' => "max@hotmail.com",
                'password' => Hash::make("max@hotmail.com"),
            ],
            [
                'last_name' => "Cubeddu",
                'first_name' => "Jo88o",
                'role_id' => 2,
                'email' => "jo@hotmail.com",
                'password' => Hash::make("jo@hotmail.com"),
            ],
            [
                'last_name' => "Manderveld",
                'first_name' => "Martin",
                'role_id' => 1,
                'email' => "martin@hotmail.com",
                'password' => Hash::make("martin@hotmail.com"),
            ],
        ]);
    }
}
