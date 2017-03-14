<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'show-task']);
        Permission::create(['name' => 'view-task']);
        Permission::create(['name' => 'create-task']);
        Permission::create(['name' => 'update-task']);
        Permission::create(['name' => 'delete-task']);

        //Role::create(['name' => 'admin']);
    }
}