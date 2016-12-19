<?php

namespace App\Policies;


class HasAdmin
{
    /**
     * @param $user
     * @param $ability
     * @return bool
     */
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) return true;
    }  //
}
