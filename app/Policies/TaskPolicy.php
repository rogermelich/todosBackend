<?php

namespace RogerMelich\TodosBackend\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TaskPolicy.
 *
 * @package RogerMelich\TodosBackend\Policies
 */
class TaskPolicy extends BasePolicy
{
    use HandlesAuthorization,HasAdmin;

    /**
     * @return string
     */
    protected function model()
    {
        return 'task';
    }
}
