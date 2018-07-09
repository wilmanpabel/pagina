<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    public function edit(App\User $authUser, App\User $user)
    {
        return $authUser->id === $user->id;
    }

}
