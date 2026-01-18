<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('roles')->insert(
            [
                'role_name' => 'Admin',
                'description' => 'Administrator with full access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'cashier',
                'description' => 'Kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'chef',
                'description' => 'Koki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'customer',
                'description' => 'Pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
