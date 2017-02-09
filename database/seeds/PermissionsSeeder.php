<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            array(
                array('name' => 'All'),
                array('name' => 'Create and Edit and Update Task'),
                array('name' => 'Show Task'),
            ));
    }
}
