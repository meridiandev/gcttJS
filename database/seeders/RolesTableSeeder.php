<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Пользователь',
            ],
            [
                'id'    => 2,
                'title' => 'Педагог',
            ],
            [
                'id'    => 3,
                'title' => 'Секретарь',
            ],
            [
                'id'    => 4,
                'title' => 'Глабальный Администратор',
            ],
            [
                'id'    => 5,
                'title' => 'Студент',
            ],
            [
                'id'    => 6,
                'title' => 'Родитель',
            ],
            [
                'id'    => 7,
                'title' => 'Директор',
            ],
            [
                'id'    => 8,
                'title' => 'Завуч',
            ],
            [
                'id'    => 9,
                'title' => 'Гость',
            ],
        ];

        Role::insert($roles);
    }
}
