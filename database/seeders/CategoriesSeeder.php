<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {

            $index = $i < 10 ? "0" . $i : $i;

            Categories::query()->create([
                'name' => "ВАЗ 21{$index}"
            ]);
        }

        Categories::query()->create([
            'name' => 'Lada Priora'
        ]);

        Categories::query()->create([
            'name' => 'Lada Granta (до 2018)'
        ]);
    }
}
