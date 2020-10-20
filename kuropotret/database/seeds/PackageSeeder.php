<?php

// use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Seeder;
use App\package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name_pack' => 'Wedding',
            'price' => 1500000,
            'qty_photos' => 'Unlimited foto',
            'qty_edit' => '30 edit foto',
            'duration' => '3-5 menit video',
            'working_hours' => '10 jam penyewaan'
        ]);
        Package::create([
            'name_pack' => 'Akad',
            'price' => 800000,
            'qty_photos' => 'Unlimited foto',
            'qty_edit' => '30 edit foto',
            'duration' => '3-5 menit video',
            'working_hours' => '4 jam penyewaan'
        ]);
        Package::create([
            'name_pack' => 'Wedding & Akad',
            'price' => 2000000,
            'qty_photos' => 'Unlimited foto',
            'qty_edit' => '45 edit foto',
            'duration' => '3-5 menit video',
            'working_hours' => ''
        ]);
        Package::create([
            'name_pack' => 'Pre-Wedding',
            'price' => 1000000,
            'qty_photos' => 'Unlimited foto',
            'qty_edit' => '30 edit foto',
            'duration' => '3-5 menit video',
            'working_hours' => '4 jam penyewaan'
        ]);
        Package::create([
            'name_pack' => 'Video Musik',
            'price' => 1000000,
            'qty_photos' => '1 foto thumbnail',
            'qty_edit' => '1 edit foto',
            'duration' => 'full musik',
            'working_hours' => ''
        ]);
    }
}
