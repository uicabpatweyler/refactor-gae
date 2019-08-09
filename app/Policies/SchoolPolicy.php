<?php

namespace App\Policies;

use App\User;
use App\Models\Config\School;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any schools.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the school.
     *
     * @param User $user
     * @param School $school
     * @return mixed
     */
    public function view(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can create schools.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the school.
     *
     * @param User $user
     * @param School $school
     * @return mixed
     */
    public function update(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can delete the school.
     *
     * @param User $user
     * @param School $school
     * @return mixed
     */
    public function delete(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can restore the school.
     *
     * @param User $user
     * @param School $school
     * @return mixed
     */
    public function restore(User $user, School $school)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the school.
     *
     * @param User $user
     * @param School $school
     * @return mixed
     */
    public function forceDelete(User $user, School $school)
    {
        //
    }
}
