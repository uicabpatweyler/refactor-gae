<?php

namespace App\Policies;

use App\User;
use App\RoleApp;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleAppPolicy
{
    use HandlesAuthorization;

    /*
     * For authorizing of the application super administrator to perform any action
     */
    public function before($user, $ability)
    {
      if ($user->isA('superadmin')) {
        return true;
      }
      return false;
    }
    
    /**
     * Determine whether the user can view any role apps.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the role app.
     *
     * @param  \App\User  $user
     * @param  \App\RoleApp  $roleApp
     * @return mixed
     */
    public function view(User $user, RoleApp $roleApp)
    {

    }

    /**
     * Determine whether the user can create role apps.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the role app.
     *
     * @param  \App\User  $user
     * @param  \App\RoleApp  $roleApp
     * @return mixed
     */
    public function update(User $user, RoleApp $roleApp)
    {
        //
    }

    /**
     * Determine whether the user can delete the role app.
     *
     * @param  \App\User  $user
     * @param  \App\RoleApp  $roleApp
     * @return mixed
     */
    public function delete(User $user, RoleApp $roleApp)
    {
        //
    }

    /**
     * Determine whether the user can restore the role app.
     *
     * @param  \App\User  $user
     * @param  \App\RoleApp  $roleApp
     * @return mixed
     */
    public function restore(User $user, RoleApp $roleApp)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the role app.
     *
     * @param  \App\User  $user
     * @param  \App\RoleApp  $roleApp
     * @return mixed
     */
    public function forceDelete(User $user, RoleApp $roleApp)
    {
        //
    }
}
