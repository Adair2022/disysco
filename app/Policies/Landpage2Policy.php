<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Landpage2;
use App\Models\User;

class Landpage2Policy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Landpage2 $landpage2)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Landpage2 $landpage2)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Landpage2 $landpage2)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Landpage2 $landpage2)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Landpage2 $landpage2)
    {
        //
    }
}
