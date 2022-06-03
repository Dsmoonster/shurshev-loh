<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Product::query()->create([
                'name' => 'Продукт ' . $i,
                'price' => rand(1000, 100000),
                'content' => '<h1>У Марса мелкий член всего 13см</h1>',
                'category_id' => rand(1, 20)
            ]);
        }
    }
}
