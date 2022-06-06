<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::query()->create([
            'full_name' => 'Шуршев Андрей',
            'content' => 'Отличный сервис! Нашел нужные запчасти на свой автомобиль Лада Приора'
        ]);


        Review::query()->create([
            'full_name' => 'Шанов Андрей',
            'content' => 'Супер! Очень дешево, все оригинал'
        ]);


        Review::query()->create([
            'full_name' => 'Петров Арсений',
            'content' => 'Все понравилось, персонал обученный. Подобрали запчасти, все оплатил, всё пришло'
        ]);
    }
}
