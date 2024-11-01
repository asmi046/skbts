<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Переоборудование всех видов автотранспорта в Курске",
                'seo_description' => "Переоборудование всех видов автотранспорта в Курске",
                'page_title' => "",
            ],
            [
                'url' => "thencs_consult",
                'seo_title' => "Благодарим за обращение, мы свяжемся с Вами в ближайшее время",
                'seo_description' => "Благодарим за обращение, мы свяжемся с Вами в ближайшее время",
                'page_title' => "",
            ],

        ];

        DB::table("seo_data")->insert($data);
    }
}
