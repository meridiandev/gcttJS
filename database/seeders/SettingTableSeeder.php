<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'site_title' => 'IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования',
            'site_header' => 'IT-куб.Новокузнецк',
            'site_email' => 'itcube42@yandex.ru',
            'site_phone' => '+7 (3843) 77-88-89',
            'site_meridian' => 'МБУ ДО "Центр детского (юношеского) технического творчества «Меридиан»"',
            'site_address' => '654 018, Кемеровская область, г. Новокузнецк, ул. Циолковского, 78а',
            'site_footer' => '2022. «IT-куб» г.Новокузнецк.',
            'site_footer_link' => 'https://ctt-meridian.ru/'
        ];

        Setting::insert($settings);
    }
}
