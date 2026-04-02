<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view_any',
            'view',
            'create',
            'update',
            'delete',
            'restore',
        ];

        $modules = [
            'organization',
            'user',
        ];

        foreach ($modules as $module) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate(
                    ['name' => "{$module}.{$permission}"],
                    ['guard_name' => 'web']
                );
            }
        }
    }
}
