<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admins = [
            [
                'name' => 'Admin One',
                'email' => 'adminone@example.com',
                'phoneNumber' => '0912345679',
                'password' => Hash::make('adminpassword1'),
            ],
            [
                'name' => 'Admin Two',
                'email' => 'admintwo@example.com',
                'phoneNumber' => '09123456987',
                'password' => Hash::make('adminpassword2'),
            ],
        ];
        foreach ($Admins as $Admin) {
            Admin::create($Admin);
        }
    }}

/**
php artisan module:migrate Admin
php artisan module:seed Admin
php artisan module:migrate Customer
php artisan module:seed Customer
php artisan module:migrate Item
php artisan module:seed Item
 **/
