<?php

namespace Modules\Item\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Item\Models\categories;

class categoriestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = [
            ['name' => 'Real estate'],
            ['name' => 'Vehicles'],
            ['name' => 'Digital goods'],
            ['name' => 'Home and kitchen'],
            ['name' => 'Services'],
            ['name' => 'Personal belongings'],
            ['name' => 'Entertainment and leisure'],
            ['name' => 'Industrial equipment'],
        ];
       foreach ($categories as $category) {
           Categories::create($category);
       }
    }
}
