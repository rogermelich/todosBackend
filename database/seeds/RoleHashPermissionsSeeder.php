<?php

use Illuminate\Database\Seeder;

class RoleHashPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert(
            array(
                array('permission_id' => '1', 'role_id' => '1'),
                array('permission_id' => '2', 'role_id' => '2'),
                array('permission_id' => '3', 'role_id' => '3'),
            ));
    }
}
