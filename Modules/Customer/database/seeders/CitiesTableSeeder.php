<?php

namespace Modules\Customer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Customer\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $cities = [
            ['name' => 'Tehran'],
            ['name' => 'Mashhad'],
            ['name' => 'Isfahan'],
            ['name' => 'Karaj'],
            ['name' => 'Shiraz'],
            ['name' => 'Tabriz'],
            ['name' => 'Qom'],
            ['name' => 'Ahvaz'],
            ['name' => 'Kermanshah'],
            ['name' => 'Urmia'],
        ];
        foreach ($cities as $city) {
            City::create($city);
        }
    }

//    public function run(): void
//    {
//        DB::table('city')->insert([
//            ['name' => 'Tehran'],
//            ['name' => 'Mashhad'],
//            ['name' => 'Isfahan'],
//            ['name' => 'Karaj'],
//            ['name' => 'Shiraz'],
//            ['name' => 'Tabriz'],
//            ['name' => 'Qom'],
//            ['name' => 'Ahvaz'],
//            ['name' => 'Kermanshah'],
//            ['name' => 'Urmia'],
//        ]);
//    }
}
