<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Фонарь для приоры
        Image::query()->create([
            'product_id' => 1,
            'image_path' => 'public/1.jpg'
        ]);

        Image::query()->create([
            'product_id' => 1,
            'image_path' => 'public/2.jpg'
        ]);

        Image::query()->create([
            'product_id' => 1,
            'image_path' => 'public/3.jpg'
        ]);

        // Фара жигули

        Image::query()->create([
            'product_id' => 2,
            'image_path' => 'public/4.jpg'
        ]);

        Image::query()->create([
            'product_id' => 2,
            'image_path' => 'public/5.jpg'
        ]);

        Image::query()->create([
            'product_id' => 2,
            'image_path' => 'public/6.jpg'
        ]);

        // Бампер для гранты спорт

        Image::query()->create([
            'product_id' => 3,
            'image_path' => 'public/7.jpg'
        ]);

        Image::query()->create([
            'product_id' => 3,
            'image_path' => 'public/8.jpg'
        ]);

    }
}
