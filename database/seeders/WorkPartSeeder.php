<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class WorkPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Силовые и защитные элементы автомобиля",
                'services' => file_get_contents(public_path('works/silovie.html'))
            ],

            [
                'title' => "Транспортировка и хранение багажа",
                'services' => file_get_contents(public_path('works/bagazg.html'))
            ],

            [
                'title' => "Колесные и ходовые элементы",
                'services' => file_get_contents(public_path('works/hodovie.html'))
            ],

            [
                'title' => "Модификация и перепланировка автомобиля",
                'services' => file_get_contents(public_path('works/plane.html'))
            ],

            [
                'title' => "Специальные транспортные средства",
                'services' => file_get_contents(public_path('works/spets.html'))
            ],

            [
                'title' => "Погрузочно-разгрузочное оборудование",
                'services' => file_get_contents(public_path('works/pogr.html'))
            ],

            [
                'title' => "Грузовые и специализированные платформы",
                'services' => file_get_contents(public_path('works/gruz.html'))
            ],

            [
                'title' => "Специальное оборудование и оснастка",
                'services' => file_get_contents(public_path('works/osn.html'))
            ],

            [
                'title' => "Автомобили для перевозки грузов и людей",
                'services' => file_get_contents(public_path('works/gr_l.html'))
            ],

            [
                'title' => "Специальные услуги и доработки",
                'services' => file_get_contents(public_path('works/sud.html'))
            ],
        ];

        DB::table("work_parts")->insert($data);
    }
}
