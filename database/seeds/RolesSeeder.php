<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            array(
                array('name' => 'Admin'),
                array('name' => 'Editor'),
                array('name' => 'User'),
            ));
    }
}
