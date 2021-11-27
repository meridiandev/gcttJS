<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_access',
            ],
            [
                'id'    => 2,
                'title' => 'teacher_access',
            ],
            [
                'id'    => 3,
                'title' => 'clerk_access',
            ],
            [
                'id'    => 4,
                'title' => 'global_admin_access',
            ],
            [
                'id'    => 5,
                'title' => 'student_access',
            ],
            [
                'id'    => 6,
                'title' => 'parent_access',
            ],
            [
                'id'    => 7,
                'title' => 'director_access',
            ],
            [
                'id'    => 8,
                'title' => 'head_teacher_access',
            ],
            [
                'id'    => 9,
                'title' => 'guest_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
