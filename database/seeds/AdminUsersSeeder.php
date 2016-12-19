<?php

use Illuminate\Database\Seeder;

/**
 * Class AdminUsersSeeder
 */
class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            factory(App\User::class)->create([
                    "name" => "Roger Melich",
                    "email" => "rogermelich@gmail.com",
                    "password" => bcrypt(env('ROGER_PWD', '123456'))]
            );
        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}