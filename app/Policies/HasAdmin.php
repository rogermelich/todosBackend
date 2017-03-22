<?php

namespace RogerMelich\TodosBackend\Policies;

/**
 * Class HasAdmin.
 *
 * @package RogerMelich\TodosBackend\Policies
 */
trait HasAdmin
{
    /**
     * @param $user
     * @param $ability
     * @return bool
     */
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) return true;
    }
}
