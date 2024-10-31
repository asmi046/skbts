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
            ]
        ];

        DB::table("work_parts")->insert($data);
    }
}
