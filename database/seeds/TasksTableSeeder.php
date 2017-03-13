<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 49)->create()->each(function ($user) {
            $user->tasks()->saveMany(
                factory(App\Task::class, 10)->create(['user_id' => $user->id])
            );
        });

//        factory(App\Task::class,30)->create();
////        $task = factory(App\Task::class)->make();
////        factory('App\Task')
    }
}
