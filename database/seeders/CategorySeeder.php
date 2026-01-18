<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'makanan', 'description' => 'makanan rebus '],
            ['name' => 'minuman', 'description' => 'minuman dingin es'],
            ['name' => 'snack', 'description' => 'chitatos '],
            ['name' => 'desert', 'description' => 'sweet cake and pudding'],
            ['name' => 'Kopi', 'description' => 'cappuccino and latte' ],
        ];
    }
}
