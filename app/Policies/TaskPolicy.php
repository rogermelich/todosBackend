<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy extends BasePolicy
{
    use HandlesAuthorization;

    /**
     * @return string
     */
    protected function model()
    {
        return 'task';
    }
}
