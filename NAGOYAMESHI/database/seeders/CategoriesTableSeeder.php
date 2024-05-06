<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
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

        $japanese_categories = [
            '日本料理', '寿司', '海鮮', '天ぷら', 'とんかつ', 'すき焼き', 
            '焼き鳥', 'そば', 'うどん', '丼', 'お好み焼き・たこ焼き', 'おでん'
        ];

        $western_categories = [
            '洋食', 'ステーキ', 'フレンチ', 'イタリアン', 'スペイン料理', 
            'ヨーロッパ料理', 'アメリカ料理'
        ];

        $chinese_categories = [
            '中華料理', '四川料理', '台湾料理', '飲茶・点心', '餃子'
        ];

        $asia_ethnic_categories = [
            'アジア・エスニック', '韓国料理', '東南アジア料理', '南アジア料理', 
            '中東料理', '中南米料理', 'アフリカ料理' 
        ];

        $curry_categories = [
            'カレー', 'インドカレー', 'スープカレー'
        ];

        $yakiniku_categories = [
            '焼肉', 'ホルモン', 'ジンギスカン'
        ];

        $nabe_categories = [
            '鍋', 'もつ鍋', '水炊き', 'ちゃんこ鍋', '火鍋', 'しゃぶしゃぶ'
        ];

        $izakaya_categories = [
            '居酒屋', 'ダイニングバー', '立ち飲み', 'バル', 'ビアガーデン・ビアホール'
        ];

        $ramen_categories = [
            'ラーメン', 'つけ麺', '油まぜそば・まぜそば', '台湾まぜそば', '担々麺', 
            '汁なし担々麺', '刀削麺'
        ];

        $cafe_categories = [
            'カフェ', '喫茶店', '甘味処', 'フルーツパーラー', 'パンケーキ', 
            'コーヒースタンド', 'ティースタンド', 'ジューススタンド', 'タピオカ'
        ];

        $sweets_categories = [
            'スイーツ', '洋菓子', 'ケーキ', 'シュークリーム', 'チョコレート', 
            'ドーナッツ', 'マカロン', 'バームクーヘン', 'プリン', 'クレープ・ガレット', 
            'ジェラート・アイスクリーム', 'ソフトクリーム', 'かき氷' 
        ];

        $others_categories = [
            'その他'
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '和食') {
                foreach ($japanese_categories as $japanese_category) {
                    Category::create([
                        'name' => $japanese_category,
                        'major_category_name' => $major_category_name,
                    ]);
                }
            }

            if ($major_category_name == '洋食・西洋料理') {
                foreach ($western_categories as $western_category) {
                    Category::create([
                        'name' => $western_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '中華料理') {
                foreach ($chinese_categories as $chinese_category) {
                    Category::create([
                        'name' => $chinese_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'アジア・エスニック') {
                foreach ($asia_ethnic_categories as $asia_ethnic_category) {
                    Category::create([
                        'name' => $asia_ethnic_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'カレー') {
                foreach ($curry_categories as $curry_category) {
                    Category::create([
                        'name' => $curry_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
            
            if ($major_category_name == '焼肉・ホルモン') {
                foreach ($yakiniku_categories as $yakiniku_category) {
                    Category::create([
                        'name' => $yakiniku_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '鍋') {
                foreach ($nabe_categories as $nabe_category) {
                    Category::create([
                        'name' => $nabe_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == '居酒屋') {
                foreach ($izakaya_categories as $izakaya_category) {
                    Category::create([
                        'name' => $izakaya_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'ラーメン・つけ麺') {
                foreach ($ramen_categories as $ramen_category) {
                    Category::create([
                        'name' => $ramen_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'カフェ・喫茶店') {
                foreach ($cafe_categories as $cafe_category) {
                    Category::create([
                        'name' => $cafe_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'スイーツ') {
                foreach ($sweets_categories as $sweets_category) {
                    Category::create([
                        'name' => $sweets_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }

            if ($major_category_name == 'その他') {
                foreach ($others_categories as $others_category) {
                    Category::create([
                        'name' => $others_category,
                        'major_category_name' => $major_category_name
                    ]);
                }
            }
        }
    
    }
}
