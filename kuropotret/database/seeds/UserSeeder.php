<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'ekahirinda',
            'name' => 'Rinda',
            'KTP' => '23456',
            'no_phone' => '082919212',
            'location' => 'Sidoarjo',
            'email' => 'eka@gmail.com',
            'password' => '123',
            'role' => 'customer'
        ]);
    }
}
