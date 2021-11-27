<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::all();
        // 4 gbadmin@gbadmin.com
        Role::findOrFail(4)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) != 'user_';
        });

        // 4 gbadmin@gbadmin.com
        Role::findOrFail(4)->permissions()->sync($user_permissions);
}
