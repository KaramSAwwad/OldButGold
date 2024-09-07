<?php

namespace Modules\Item\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Item\Models\Item;

class ItemDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items =[
            [
                'title' => 'Used Car',
                'description' => 'A slightly used car in great condition.',
                'price' => 5000.00,
                'item_category_id' => '2',
                'owner_id' => 1,


            ],
            [
                'title' => 'Gaming Laptop',
                'description' => 'A high-performance gaming laptop with latest specs.',
                'price' => 1200.00,
                'item_category_id' => '3',
                'owner_id' => 2,


            ],
            [
                'title' => 'Antique Vase',
                'description' => 'An elegant antique vase from the 19th century.',
                'price' => 300.00,
                'item_category_id' => '6',
                'owner_id' => 3,


            ],
            [
                'title' => 'Wooden Table',
                'description' => 'A solid wooden dining table with 6 chairs.',
                'price' => 250.00,
                'item_category_id' => '4',
                'owner_id' => 4,


            ],
            [
                'title' => 'Digital Camera',
                'description' => 'A DSLR camera with extra lenses and accessories.',
                'price' => 800.00,
                'item_category_id' => '3',
                'owner_id' => 5,


            ],
        ];
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
