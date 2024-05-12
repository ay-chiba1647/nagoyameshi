<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MajorCategory;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '和食', '洋食・西洋料理', '中華料理', 'アジア・エスニック', 
            'カレー', '焼肉・ホルモン', '鍋', '居酒屋', 'ラーメン・つけ麺', 
            'カフェ・喫茶店', 'スイーツ', 'その他'
        ];

        foreach ($major_category_names as $major_category_name) {
            MajorCategory::create([
                'name' => $major_category_name,
                'description' => $major_category_name,
            ]);
        }
    }
}
