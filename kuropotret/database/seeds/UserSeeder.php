<?php

use App\User;
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
                'username' => 'ekahirinda',
                'name' => 'Rinda',
                'KTP' => '23456',
                'no_phone' => '082919212',
                'location' => 'Sidoarjo',
                'email' => 'eka@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer'
            ],
            [
                'username' => 'admin',
                'name' => 'admin',
                'KTP' => '123456',
                'no_phone' => '082919212',
                'location' => 'surabaya',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ]
        ]);
    }
}
