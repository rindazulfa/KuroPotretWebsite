<?php

use App\transaction;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        transaction::create([
            'users_id' => '1',
            'package_id' => '1',
            'date' => '2022-02-10',
            'status' => 1,
            'location' => 'Semarang',
            'description' => 'Lebih ke pemandangan ya',
            'total' => 1500000
        ]);
    }
}
