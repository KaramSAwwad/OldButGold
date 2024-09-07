<?php

namespace Modules\Item\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Item\Models\Pictures;

class picturestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pictures = [
            ['item_id' => 1, 'path' => 'images/item1_pic1.jpg'],
            ['item_id' => 1, 'path' => 'images/item1_pic2.jpg'],
            ['item_id' => 2, 'path' => 'images/item2_pic1.jpg'],
            ['item_id' => 3, 'path' => 'images/item3_pic1.jpg'],
            ['item_id' => 4, 'path' => 'images/item4_pic1.jpg'],
        ];

        foreach ($pictures as $picture) {
            Pictures::create($picture); // Ensure this is the correct model reference
        }
    }
}
