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
        Product::query()->create([
            'name' => 'Левый фонарь Приора',
            'price' => 2500,
            'content' => "<h1>Фонарь Б/У</h1><p>Фонарь в хорошем состоянии от 1го семейства</p>",
            'category_id' => 16
        ]);

        Product::query()->create([
            'name' => 'Фара для ВАЗ 2107',
            'price' => 700,
            'content' => "<h1>Передняя фара левая</h1><p>Фара досталась от донора, в отличном состояние.</p>",
            'category_id' => 7
        ]);

        Product::query()->create([
            'name' => 'Спортивный бампер для Гранты',
            'price' => 11500,
            'content' => "Спортивный бампер для гранты до рестайлинга. Бампер производится нами. <br/><h2>Высокое качество!</h2>",
            'category_id' => 17
        ]);
    }
}
