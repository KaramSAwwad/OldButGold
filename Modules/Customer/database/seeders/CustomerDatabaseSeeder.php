<?php

namespace Modules\Customer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Customer\Models\Customer;

class CustomerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'phoneNumber' => '09123456701',
                'address' => '123 Main St',
                'postal_code' => '12345',
                'city_id' => 1,  // Tehran
                'avatar' => 'avatar1.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password456'),
                'phoneNumber' => '09123456702',
                'address' => '456 Elm St',
                'postal_code' => '23456',
                'city_id' => 2,  // Mashhad
                'avatar' => 'avatar2.jpg',
            ],
            [
                'name' => 'Ali Reza',
                'email' => 'ali@example.com',
                'password' => Hash::make('password789'),
                'phoneNumber' => '09123456703',
                'address' => '789 Oak St',
                'postal_code' => '34567',
                'city_id' => 3,  // Isfahan
                'avatar' => 'avatar3.jpg',
            ],
            [
                'name' => 'Sara Ali',
                'email' => 'sara@example.com',
                'password' => Hash::make('password012'),
                'phoneNumber' => '09123456704',
                'address' => '101 Pine St',
                'postal_code' => '45678',
                'city_id' => 4,  // Karaj
                'avatar' => 'avatar4.jpg',
            ],
            [
                'name' => 'Reza Mohammad',
                'email' => 'reza@example.com',
                'password' => Hash::make('password345'),
                'phoneNumber' => '09123456705',
                'address' => '202 Maple St',
                'postal_code' => '56789',
                'city_id' => 5,  // Shiraz
                'avatar' => 'avatar5.jpg',
            ],
        ];
        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
