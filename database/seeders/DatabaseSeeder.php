<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $current = Carbon::now();

        Category::insert([
            [
                'name' => 'Shoes',
                'updated_at' => $current,
                'created_at' => $current
            ],
            [
                'name' => 'Drinks',
                'updated_at' => $current,
                'created_at' => $current
            ],
            [
                'name' => 'Beverages',
                'updated_at' => $current,
                'created_at' => $current
            ],
            [
                'name' => 'Accessories',
                'updated_at' => $current,
                'created_at' => $current
            ],
            [
                'name' => 'Clothes',
                'updated_at' => $current,
                'created_at' => $current
            ],
        ]);
    }
}
