<?php

namespace Modules\Item\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Item\Models\Customeritemlike;

class customeritemlikestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer_item_likes = [
            ['customer_id' => 1, 'item_id' => 1],
            ['customer_id' => 1, 'item_id' => 2],
            ['customer_id' => 2, 'item_id' => 3],
            ['customer_id' => 3, 'item_id' => 4],
            ['customer_id' => 4, 'item_id' => 5],
        ];
        foreach ($customer_item_likes as $customer_item_like) {
            Customeritemlike::create($customer_item_like);
        }
    }
}
